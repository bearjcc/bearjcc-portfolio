---
theme: ./
layout: cover
---

<!-- 
Layouts available:
center, cover, default, end, fact, full, image-left, image-right, image, iframe-left, iframe-right, iframe, intro, none, quote, section, statement, two-cols, two-cols-header
 -->


# TPM Slidev Theme

Presentation slides from MarkDown

---

# What is Slidev?

Slidev is a slides maker and presenter designed for developers, consist of the following features

- 📝 **Text-based** - focus on the content with Markdown, and then style them later
- 🎨 **Themable** - theme can be shared and used with npm packages
- 🧑‍💻 **Developer Friendly** - code highlighting, live coding with autocompletion
- 🤹 **Interactive** - embedding Vue components to enhance your expressions
- 🎥 **Recording** - built-in recording and camera view
- 📤 **Portable** - export into PDF, PNGs, or even a hostable SPA
- 🛠 **Hackable** - anything possible on a webpage

<!-- 
You can have speaker notes by adding a comment at the nd of your slide or by editing them in the built in editor.
 -->

---

# Navigation

Hover on the bottom-left corner to see the navigation's controls panel

## Keyboard Shortcuts

|     |     |
| --- | --- |
| <kbd>space</kbd> / <kbd>tab</kbd> / <kbd>right</kbd> | next animation or slide |
| <kbd>left</kbd>  / <kbd>shift</kbd><kbd>space</kbd> | previous animation or slide |
| <kbd>up</kbd> | previous slide |
| <kbd>down</kbd> | next slide |

---
layout: image-right
image: https://cover.sli.dev
---

# Code

Use code snippets and get the highlighting directly!

```ts
interface User {
  id: number
  firstName: string
  lastName: string
  role: string
}

function updateUser(id: number, update: Partial<User>) {
  const user = getUser(id)
  const newUser = { ...user, ...update }
  saveUser(id, newUser)
}
```

---
layout: center
class: "text-center"
---

# Learn More

[Documentations](https://sli.dev) / [GitHub Repo](https://github.com/slidevjs/slidev)


---
layout: section
---

# Section Title

---
layout: statement
---

# Statement

---
layout: fact
---

# 100%
Fact information

---
layout: quote
---

# "Notable quote"
Attribution

---
layout: image
image: https://source.unsplash.com/collection/94734566/1920x1080
---

# Page with image

---
layout: image
image: https://source.unsplash.com/collection/94734566/1920x1080
height: 50%
---

# Page with smaller image

You can specify the height and width of the image


---
layout: image-left
image: https://source.unsplash.com/collection/94734566/1920x1080
---

# Code

```ts {all|2|1-6|all}
interface User {
  id: number
  firstName: string
  lastName: string
  role: string
}

function updateUser(id: number, update: Partial<User>) {
  const user = getUser(id)
  const newUser = { ...user, ...update }
  saveUser(id, newUser)
}
```

---
layout: two-cols
---

# Left

This shows on the left

::right::

# Right

This shows on the right

---
layout: two-cols-header
---
This spans both
::left::
# Left
This shows on the left
::right::
# Right
This shows on the right
::bottom::
This shows at the bottom, aligned to the end (bottom) of the grid
