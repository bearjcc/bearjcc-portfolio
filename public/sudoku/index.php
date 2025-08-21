<!DOCTYPE html>

<html>
	<head>
		<title>Joseph's Sudoku</title>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script>
			window.addEventListener('contextmenu', function (e) { 
				//add custom contextmenu here
					e.preventDefault();//if above is blank this disables contextmenu
			}, false);
			
			function createBoard() {
				btnMenu();
				
				var board = $("#board");

				for(i=0; i<9; i++) { //create sections
					var section = $("<div>").addClass("section").attr("id", "section" + i).appendTo(board);

					if(i<3) {section.css("borderTop" ,"0");}
					if(i>5) {section.css("borderBottom" ,"0");}
					switch(i) {
						case 0: case 3: case 6:
							section.css("borderLeft" ,"0"); break;
						case 2: case 5: case 8:
							section.css("borderRight" ,"0"); break;
					}

					for(j=0; j<9; j++) { //create cells
						var cell = $("<div>").addClass("cell").attr("id", "cell" + i + j).appendTo(section);

						//remove overlapping borders
						if(j<3) {cell.css("borderTop" ,"0");}
						else if(j>5) {cell.css("borderBottom" ,"0");}
						switch(j) {
							case 0: case 3: case 6:
								cell.css("borderLeft" ,"0"); break;
							case 2: case 5: case 8:
								cell.css("borderRight" ,"0"); break;
						}

						//classify cols
						switch(i) {
							case 0: case 3: case 6: //first col of sections
								switch(j) {
									case 0: case 3: case 6:
										cell.addClass("col1"); break;
									case 1: case 4: case 7:
										cell.addClass("col2"); break;
									case 2: case 5: case 8:
										cell.addClass("col3"); break;
								} break;
							case 1: case 4: case 7: //second col of sections
								switch(j) {
									case 0: case 3: case 6:
										cell.addClass("col4"); break;
									case 1: case 4: case 7:
										cell.addClass("col5"); break;
									case 2: case 5: case 8:
										cell.addClass("col6"); break;
								} break;
							case 2: case 5: case 8: //third col of sections
								switch(j) {
									case 0: case 3: case 6:
										cell.addClass("col7"); break;
									case 1: case 4: case 7:
										cell.addClass("col8"); break;
									case 2: case 5: case 8:
										cell.addClass("col9"); break;
								} break;
						}

						//classify rows
						if(i<3) { //first row of sections
							if(j<3) {cell.addClass("row1");}
							else if(j>5) {cell.addClass("row3");}
							else {cell.addClass("row2");}
						} else if(i>5) { //third row of sections
							if(j<3) {cell.addClass("row7");}
							else if(j>5) {cell.addClass("row9");}
							else {cell.addClass("row8");}
						} else { //second row of sections
							if(j<3) {cell.addClass("row4");}
							else if(j>5) {cell.addClass("row6");}
							else {cell.addClass("row5");}
						}
						


						for(k=0; k<9; k++) { //create subcells
							var subcell = $("<span>").addClass("subcell").attr("id", "subcell" + i + j + k).text(k+1).appendTo(cell);
							subcell.addClass("subcell" + k);
							subcell.attr("onclick", "lclick(" + i + "," + j + "," + k + ")");
							subcell.attr("oncontextmenu", "rclick(" + i + "," + j + "," + k + ")");
							subcell.attr("ondblclick", "rclick(" + i + "," + j + "," + k + ")");

							if(k<3) {subcell.css("borderTop" ,"0");}
							if(k>5) {subcell.css("borderBottom" ,"0");}

							if(k<3) {subcell.css("top", "100%");}
							if(k>5) {subcell.css("top", "-100%");}
							switch(k) {
								case 0: case 3: case 6:
									subcell.css("left", "100%"); break;
								case 2: case 5: case 8:
									subcell.css("left", "-100%"); break;
							}
							switch(k) {
								case 0: case 3: case 6:
									subcell.css("borderLeft" ,"0"); break;
								case 2: case 5: case 8:
									subcell.css("borderRight" ,"0"); break;
							}
						}
					}
				}
				$("div").disableSelection();
			}

			function lclick(i,j,k) { //when the user clicks on a cell or subcell
				var subcell = $("#subcell" + i + j + k);
				if(subcell.hasClass("hidden")) { //this subcell has been hidden
					unhideCell(i,j,k);
				} else if (subcell.hasClass("selected")) { //this subcell has been selected
					//update board to hide subcells that are invalid
					updateBoard(i,j,k);
				} else { //an unhidden and unselected subcell
					setCell(i,j,k);
				}
			}

			function rclick(i,j,k) { //when the user right clicks on a cell or subcell
				var subcell = $("#subcell" + i + j + k);
				if(subcell.hasClass("selected")) { //this subcell has been selected
					unsetCell(i,j,k);
				} else if (subcell.hasClass("hidden")){ //this subcell has been hidden
					//do nothing
				} else {
					hideCell(i,j,k);
				}
			}
			
			function setCell(i,j,k) { //select this subcell to show it ontop of the cell
				var subcell = $("#subcell" + i + j + k).addClass("selected");
				if(autoHint) {updateBoard(i,j,k);}
			}

			function unsetCell(i,j,k) { //unselect this subcell
				$("#subcell" + i + j + k).removeClass("selected");
			}

			function hideCell(i,j,k) { //hide a subcell to imply cell cannot be this number
				$("#subcell" + i + j + k).addClass("hidden");
			}

			function unhideCell(i,j,k) { //bring a subcell back from hidden state
				$("#subcell" + i + j + k).removeClass("hidden");
			}

			function updateBoard(i,j,k) {
				var col = $("#cell" + i + j)[0].classList[1][3];
				var row = $("#cell" + i + j)[0].classList[2][3];
				$("#section" + i + " .subcell" + k).addClass("hidden").removeClass("avail");
				$(".row" + row + " .subcell" + k).addClass("hidden").removeClass("avail");
				$(".col" + col + " .subcell" + k).addClass("hidden").removeClass("avail");
				unhideCell(i,j,k);
			}

			function reset() {
				$(".subcell").removeClass("hidden");
				$(".subcell").removeClass("selected");
			}

			var hint = false;
			var grid = false;
			var autoHint = true;

			function autoHint() {autoHint = !autoHint;}

			function hintShow() {
				if (!hint) {
					$(".subcell").addClass("shown");
				} else {
					$(".subcell").removeClass("shown");
				}
				hint = !hint;
			}

			function gridShow() {
				if (!grid) {
					$(".subcell").addClass("grid");
				} else {
					$(".subcell").removeClass("grid");
				}
				grid = !grid;
			}

			$(window).resize(btnMenu);

			function btnMenu() {
				if(window.innerHeight > window.innerWidth) {
					$("#menu").addClass("menu-bottom");
					$("#menu").removeClass("menu-top");
				} else {
					$("#menu").removeClass("menu-bottom");
					$("#menu").addClass("menu-top");
				}
			}

			$.fn.extend({
				disableSelection: function() {
				this.each(function() {
					this.onselectstart = function() {
							return false;
						};
						this.unselectable = "on";
						$(this).css('-moz-user-select', 'none');
						$(this).css('-webkit-user-select', 'none');
					});
				}
			});

			function generate() {
				reset();

				$(".cell").addClass("unset");
				$(".subcell").addClass("avail");

				//set the  first cell randomly
				len = $(".unset").length;
				randCell = Math.floor(Math.random() * len);
				randNumb = Math.floor(Math.random() * 9);
				subcell = $(".unset").eq(randCell).children().eq(randNumb);
				subcell.addClass("selected");
				subcell.parent().removeClass("unset");
				var i = subcell.attr("id")[7]; //subcellijk
				var j = subcell.attr("id")[8];
				var k = subcell.attr("id")[9];
				updateBoard(i,j,k);
				
				generateSolver();
			}

			function generateSolver () {

				whileloop: 
				while((len = $(".unset").length) > 0) {
					for(l=0;l<len;l++) { //check for invalid solutions
						subcells = $(".unset:eq(" + l + ") .avail");
						if(subcells.length == 0) {
							//one cell has no possiblities, so start over
							generate();
							break whileloop;
						}
					}

					for(l=0;l<len;l++) { //check for cells with only 1 possibility
						subcells = $(".unset:eq(" + l + ") .avail");
						if(subcells.length == 1) {
							//one cell has only one possibility so set it
							subcell = subcells.eq(0);
							subcell.addClass("selected");
							subcell.parent().removeClass("unset");
							var i = subcell.attr("id")[7]; //subcellijk
							var j = subcell.attr("id")[8];
							var k = subcell.attr("id")[9];
							updateBoard(i,j,k); //mark the appropriate subcells unavailable
							generateSolver(); //start back at the beginning
							break whileloop;
						}
					}

					for (ll=2; ll<9; ll++) {
						if (randomPicker(len, ll)) {break whileloop;};
					}
				}
			}

			function randomPicker (len, possibilities) { 
				for(l=0;l<len;l++) { //check for cells with certain number of possibilities
					subcells = $(".unset:eq(" + l + ") .avail");
					if(subcells.length == possibilities) {
						//one cell has only two possibilities so set it randomly
						pick = Math.floor(Math.random() * possibilities);
						subcell = subcells.eq(pick);
						subcell.addClass("selected");
						subcell.parent().removeClass("unset");
						var i = subcell.attr("id")[7]; //subcellijk
						var j = subcell.attr("id")[8];
						var k = subcell.attr("id")[9];
						updateBoard(i,j,k); //mark the appropriate subcells unavailable
						generateSolver(); //start back at the beginning to find new cells with less possibilities
						return true;
					}
				}
			}

			var numbs = [0,1,2,3,4,5,6,7,8];
			var order = [0,8,2,6,1,7,3,5,4];
			var secs, cols, rows, grid;
			var attempts = 1;
			var quickest = [];
			var quickTime = 1000000000000000;
			var slowest = [];
			var slowTime = 0;

			function gen3tester(trials) {
				var pos = numbs.slice();
				i0 = numbs.slice();
				for(i0i = 0; i0i < i0.length; i0i++) {
					i1 = numbs.slice();
					i1.splice(i0.indexOf(i0[i0i]),1);
					for(i1i = 0; i1i < i1.length; i1i++) {
						i2 = numbs.slice();
						i2.splice(i0.indexOf(i0[i0i]),1);
						i2.splice(i1.indexOf(i1[i1i]),1);
						for(i2i = 0; i2i < i2.length; i2i++) {
							i3 = numbs.slice();
							i3.splice(i0.indexOf(i0[i0i]),1);
							i3.splice(i1.indexOf(i1[i1i]),1);
							i3.splice(i2.indexOf(i2[i2i]),1);
							for(i3i = 0; i3i < i3.length; i3i++) {
								i4 = numbs.slice();
								i4.splice(i0.indexOf(i0[i0i]),1);
								i4.splice(i1.indexOf(i1[i1i]),1);
								i4.splice(i2.indexOf(i2[i2i]),1);
								i4.splice(i3.indexOf(i3[i3i]),1);
								for(i4i = 0; i4i < i4.length; i4i++) {
									i5 = numbs.slice();
									i5.splice(i0.indexOf(i0[i0i]),1);
									i5.splice(i1.indexOf(i1[i1i]),1);
									i5.splice(i2.indexOf(i2[i2i]),1);
									i5.splice(i3.indexOf(i3[i3i]),1);
									i5.splice(i4.indexOf(i4[i4i]),1);
									for(i5i = 0; i5i < i5.length; i5i++) {
										i6 = numbs.slice();
										i6.splice(i0.indexOf(i0[i0i]),1);
										i6.splice(i1.indexOf(i1[i1i]),1);
										i6.splice(i2.indexOf(i2[i2i]),1);
										i6.splice(i3.indexOf(i3[i3i]),1);
										i6.splice(i4.indexOf(i4[i4i]),1);
										i6.splice(i5.indexOf(i5[i5i]),1);
										for(i6i = 0; i6i < i6.length; i6i++) {
											i7 = numbs.slice();
											i7.splice(i0.indexOf(i0[i0i]),1);
											i7.splice(i1.indexOf(i1[i1i]),1);
											i7.splice(i2.indexOf(i2[i2i]),1);
											i7.splice(i3.indexOf(i3[i3i]),1);
											i7.splice(i4.indexOf(i4[i4i]),1);
											i7.splice(i5.indexOf(i5[i5i]),1);
											i7.splice(i6.indexOf(i6[i6i]),1);
											for(i7i = 0; i7i < i7.length; i7i++) {
												i8 = numbs.slice();
												i8.splice(i0.indexOf(i0[i0i]),1);
												i8.splice(i1.indexOf(i1[i1i]),1);
												i8.splice(i2.indexOf(i2[i2i]),1);
												i8.splice(i3.indexOf(i3[i3i]),1);
												i8.splice(i4.indexOf(i4[i4i]),1);
												i8.splice(i5.indexOf(i5[i5i]),1);
												i8.splice(i6.indexOf(i6[i6i]),1);
												i8.splice(i7.indexOf(i7[i7i]),1);
												order = [i0[i0i],i1[i1i],i2[i2i],i3[i3i],i4[i4i],i5[i5i],i6[i6i],i7[i7i],i8[0]];
												
												start = Date.now();
												for(i = 0; i < trials; i++) {
													start1 = Date.now();
													while(!gen3()) {
														if ((Date.now() - start1) > 1000) {
															start = 0;
															break;
														}
													}
												}
												time = Date.now() - start;

												if(time < quickTime) {
													quickTime = time;
													quickest = order;
												} else if (time > slowTime) {
													slowTime = time;
													slowest = order;
												}
											}
										}
									}
								}
							}
						}
					}
				}
				console.log("Quickest: " + quickest.toString() + " at " + (quickTime/trials));
				console.log("Slowest: " + slowest.toString() + " at " + (slowTime/trials));
			}

			function gen3() {
				//const start = Date.now();
				//startNew = Date.now();
				//initialize	
				grid = [Array(),Array(),Array(),Array(),Array(),Array(),Array(),Array(),Array()];
				secs = [numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice()];
				rows = [numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice()];
				cols = [numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice(),numbs.slice()];
				
				//iterate
				for(secN = 0; secN < 9; secN++) {
					sec = order[secN];
					for(cellN = 0; cellN < 9; cellN++) {
						cell = order[cellN];
						row = getRow(sec, cell);
						col = getCol(sec, cell);
						possibilities = secs[sec].filter(x => rows[row].includes(x));
						possibilities = possibilities.filter(x => cols[col].includes(x));
						if(possibilities.length == 0) {
							//no valid solutions
							//attempts++;
							//endNew = Date.now();
							//console.log("Wasted " + (endNew - startNew) + " ms on invalid solution. Trying again");
							return false; //exit this attempt and try again
						}
						randNum = Math.floor(Math.random() * possibilities.length);
						pickedNum = possibilities[randNum];
						grid[sec][cell] = pickedNum + 1;

						i = secs[sec].indexOf(pickedNum);
						secs[sec].splice(i, 1);

						i = rows[row].indexOf(pickedNum);
						rows[row].splice(i, 1);

						i = cols[col].indexOf(pickedNum);
						cols[col].splice(i, 1);
					}
				}
				//const end = Date.now();
				//time = end - start;
				//console.log("It took " + attempts + " attempts to generate valid solution.");
				//console.log("It took " + time + "ms to generate valid solution");
				//console.log("Average of " + time/attempts + "per attempt");
				return true;
			}


			function genCol(col) {
				//col 0,1,2 sections 0,3,6
				//col 3,4,5 sections 1,4,7
				//col 6,7,8 sections 2,5,8

				//col 0,3,6 cells 0,3,6
				//col 1,4,7 cells 1,4,7
				//col 2,5,8 cells 2,5,8

				switch(col % 3) {
					case 0:
						c = 0; break;
					case 1:
						c = 1; break;
					case 2:
						c = 2; break;
				}

				if (col < 3) {s = 0;}
				else if (col > 5) {s = 2;}
				else {s = 1;}

				return [gA[s][c+0], gA[s][c+3], gA[s][c+6], gA[s+3][c+0], gA[s+3][c+3], gA[s+3][c+6], gA[s+6][c+0], gA[s+6][c+3], gA[s+6][c+6]];
			}

			function genRow(row) {
				//row 0,3,6 cells 0,1,2
				//row 1,4,7 cells 3,4,5
				//row 2,5,8 cells 6,7,8

				//row 0,1,2 sections 0,1,2
				//row 3,4,5 sections 3,4,5
				//row 6,7,8 sections 6,7,8

				switch(row % 3) {
					case 0:
						c = 0; break;
					case 1:
						c = 3; break;
					case 2:
						c = 6; break;
				}

				if (row < 3) {s = 0;}
				else if (row > 5) {s = 2;}
				else {s = 1;}

				return [gA[s][c], gA[s][c+1], gA[s][c+2], gA[s+1][c], gA[s+1][c+1], gA[s+1][c+2], gA[s+2][c], gA[s+2][c+1], gA[s+2][c+2]];
			}

			//create arrays
			var cellArray = [0, 1, 2, 3, 4, 5, 6, 7, 8];
			var sectionArray = [cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice()];
			//grid array
			var gA = [sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice()];
			//column array
			var cA = [genCol(0),genCol(1),genCol(2),genCol(3),genCol(4),genCol(5),genCol(6),genCol(7),genCol(8)];
			//row array
			var rA = [genRow(0),genRow(1),genRow(2),genRow(3),genRow(4),genRow(5),genRow(6),genRow(7),genRow(8)];

			function generate2 () {
				//reset section array
				var sectionArray = [cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice(),cellArray.slice()];
				//reset grid array
				var gA = [sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice(),sectionArray.slice()];

				//fill in values for the first section
				sec = 0;
				possibilities = cellArray.slice();
				for(cell = 0; cell < 9; cell++) {
					randNum = Math.floor(Math.random() * possibilities.length);
					clearInvalids(sec, cell, possibilities[randNum]);
					setCell2(sec, cell, possibilities[randNum]);
					possibilities.splice(randNum, 1);
				}

				//opposite corner
				sec = 8;
				possibilities = cellArray.slice();
				for(cell = 0; cell < 9; cell++) {
					randNum = Math.floor(Math.random() * possibilities.length);
					clearInvalids(sec, cell, possibilities[randNum]);
					setCell2(sec, cell, possibilities[randNum]);
					possibilities.splice(randNum, 1);
				}

				//top right corner, change algorythm
				sec = 2;
				for(cell = 0; cell < 9; cell++) {
					possibilities = gA[sec][cell].toString().replaceAll(',','');
					randNum = Math.floor(Math.random() * possibilities.length);
					clearInvalids(sec, cell, possibilities[randNum]);
					setCell2(sec, cell, possibilities[randNum]);
				}

			}

			function setCell2(sec,cell,num) {
				for(n=0;n<9;n++) {
					gA[sec][cell][n] = ((n==num) ? num : "");//clear each value except set
				}
			}

			function clearInvalids(sec, cell, num) {
				col = getRow(sec, cell);
				row = getCol(sec, cell);
				for(cell=0;cell<9;cell++) {
					gA[sec][cell][num] = "";
					cA[col][cell][num] = "";
					rA[row][cell][num] = "";
				}
			}

			function getCol(sec, cell) {
				return (cell % 3) + 3 * (sec % 3);
			}

			function getRow(sec, cell) {
				return Math.floor(cell / 3) + 3*Math.floor(sec / 3);
			}

			function getSec(col, row) {
				return Math.floor(col / 3) + 3*Math.floor(row / 3);
			}

			function getCell(col, row) {
				return (col % 3) + 3 * (row % 3);
			}
		</script>
	</head>

	
	<style>
		body {
			margin: min(0.1vw, 0.1vh);
		}
		
		#board, #board div {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 1fr 1fr 1fr;
			box-sizing: border-box;
			cursor: pointer;
		}

		#board {
			border: 5px solid black;
			grid-gap: 3px;
			width: min(99.8vw, 99.8vh);
			height: min(99.8vw, 99.8vh);
			margin: auto;
			background-color: black;
		}

		.section {
			grid-gap: 1px;
		}

		.cell {
			background-color: white;
		}

		.subcell {
			display: flex;
  			align-items: center;
			justify-content: center;
			visibility: hidden;
			font-size: min(2vh, 2vw);
		}

		.cell:hover .subcell {
			visibility: visible;
		}

		.subcell:hover {
			background-color: thistle;
		}

		.selected {
			position: relative;
			visibility: visible;
			transform: scale(3,3);
			border: none !important;
			background-color: white;
		}

		.hidden {
			color: white;
		}

		#menu {
			position: fixed;
			height: 270px;
			font-size: clamp(8px, min(2vh, 2vw), 24px);
		}

		#menu div {
			width: max-content;
			height: min-content;
			padding: min(1vh, 1vw);
			cursor: pointer;
		}

		.menu-bottom {
			bottom: 0;
		}

		.menu-top {
			top: 0;
		}

		#reset img{
			height: 2vh;
			width: 2vh;
		}

		.shown {
			visibility: visible;
		}

		.grid {
			border: 0.5px solid grey;
		}
	</style>

	

	<body onload="createBoard()">
		<div id="board"></div>
		<div id="menu">
			<form>
				<div>Right Click (or longpress) to clear a number</div>
				<div>Click on a solved cell to update hints</div>
				<div id="reset" onclick="reset()">Reset Board <img src="/img/reset.svg" height="2vh" width="2vh"></div>
				<div id="hintBox">
					<input type="checkbox" id="hints" name="hints" onchange="hintShow()">
					<label for="hints">Show Hints</label>
				</div>
				<div id="gridBox">
					<input type="checkbox" id="grid" name="grid" onchange="gridShow()">
					<label for="grid">Show Grid</label>
				</div>
				<div id="gridBox">
					<input type="checkbox" id="autoHint" name="autoHint" onchange="autoHint()" checked>
					<label for="grid">Auto hint</label>
				</div>
			</form>
			<div><button onclick="generate()">Generate Puzzle</button></div>
	</div>
	</body>


</html>
