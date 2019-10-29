---
title: Templates | Press Theme
description: Template information
extends: _layouts.documentation
section: content
---

# Theme › Templates {#templates}

## About templates {#about}

Templates are a custom part of Press. They follow a strict ruleset but can provide huge benefits when followed.

- Very clean template files.
- Styles and scripts are automatically watched and compiled.
- Styles and scripts are also automatically included.
- Access to dynamic variables such as `$name` or `$dir`.
- Consistency!

## Template file structure {#file-structure}

```
— {template-name} (directory)
— — index.{template-name}.blade.php
— — post.{template-name}.blade.php (optional)
— — styles-{template-name}.css (optional)
— — scripts-{template-name}.css (optional)
```

- Each template directory should reside in `./resources/views/templates/`.
- Each template directory should contain at least a index file (see above)
- Template directories do not require styles or scripts files, however if you ever need to add anything extra to the template, they must be added via `styles-{template-name}.css` and/or `scripts-{template-name}.css`

## Creating a new template {#creating-new-template}

To create a new template use the CLI command `yarn template`. This will create a new template directory. After the template has been created there are two things you will need to change:

**1. Directory name**

Change `/templates/boilerplate` to `/templates/{your-new-template}`

**2. The "Template Name" in each template file**.

This means changing the text after "Template Name:" at the top of each template file. So this:

```html
Template Name: [Boilerplate]
```

...becomes this:

```html
Template Name: [{Your New Template Name}]
```

## Accessing template variables {#access-variables}

There are a few template variables that you have access to when working inside a template file. These have limited uses but can be helpful in a pinch.

- `$dir` - Contains directory name. Used for inline assets such as images. Example: `@asset("images/{$dir}/image.jpg")`.
- `$path` - Contains path from the the `templates` directory to the current template file.
- `$name` - Contains name as written at the top of the current template file.
