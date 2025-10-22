#!/bin/bash

# BearJCC Portfolio Performance Testing Script
# This script runs performance tests and generates reports

echo "🚀 BearJCC Portfolio Performance Testing"
echo "========================================"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Function to test page load time
test_page_load() {
    local page=$1
    local max_time=$2
    local url="http://127.0.0.1:8000$page"
    
    echo -n "Testing $page load time... "
    
    # Use curl to measure load time
    local start_time=$(date +%s.%N)
    local response=$(curl -s -o /dev/null -w "%{http_code}" "$url")
    local end_time=$(date +%s.%N)
    
    local load_time=$(echo "$end_time - $start_time" | bc)
    
    if (( $(echo "$load_time < $max_time" | bc -l) )); then
        echo -e "${GREEN}✓ ${load_time}s${NC}"
    else
        echo -e "${RED}✗ ${load_time}s (exceeds ${max_time}s)${NC}"
    fi
    
    if [ "$response" != "200" ]; then
        echo -e "${RED}  Warning: HTTP $response${NC}"
    fi
}

# Function to run Lighthouse audit
run_lighthouse() {
    local page=$1
    local url="http://127.0.0.1:8000$page"
    local report_file="lighthouse-${page//\//}.html"
    
    echo -n "Running Lighthouse audit for $page... "
    
    if command -v lighthouse &> /dev/null; then
        lighthouse "$url" --output=html --output-path="./$report_file" --quiet
        echo -e "${GREEN}✓ Report saved to $report_file${NC}"
    else
        echo -e "${YELLOW}⚠ Lighthouse CLI not installed${NC}"
        echo "Install with: npm install -g lighthouse"
    fi
}

# Check if Laravel server is running
echo "Checking if Laravel server is running..."
if ! curl -s http://127.0.0.1:8000 > /dev/null; then
    echo -e "${RED}❌ Laravel server is not running${NC}"
    echo "Start with: php artisan serve"
    exit 1
fi

echo -e "${GREEN}✅ Laravel server is running${NC}"
echo ""

# Test page load times
echo "📊 Page Load Time Tests"
echo "----------------------"

test_page_load "/" 3.0
test_page_load "/blog" 2.0
test_page_load "/projects" 2.0
test_page_load "/contact" 2.0
test_page_load "/about" 2.0

echo ""

# Run Lighthouse audits
echo "🔍 Lighthouse Performance Audits"
echo "--------------------------------"

run_lighthouse "/"
run_lighthouse "/blog"
run_lighthouse "/projects"

echo ""

# Performance summary
echo "📈 Performance Summary"
echo "---------------------"
echo "✅ Load time tests completed"
echo "✅ Lighthouse audits generated"
echo ""
echo "📋 Next Steps:"
echo "1. Review Lighthouse reports for optimization opportunities"
echo "2. Check mobile performance scores"
echo "3. Implement recommended optimizations"
echo "4. Monitor performance in production"
echo ""
echo "🎯 Target Scores:"
echo "- Performance: 90+"
echo "- Accessibility: 90+"
echo "- Best Practices: 90+"
echo "- SEO: 90+"


