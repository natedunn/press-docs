---
title: Components | Press Theme
description: General information about the Wordpress theme
extends: _layouts.documentation
section: content
---

# Theme › Components › About

## Component Aliases

_Note: This section requires a basic knowledge of [Blade templating](https://laravel.com/docs/5.8/blade), specifically focusing on components and aliases._

Each component inside `resources/views/components` will automatically have an _include alias_ registered for it with an additional underscore (`_`) before the name. This extra underscore helps add the distinction that this "directive" is an automatically-registered alias for a component.

For example: if there is a component inside this directory with the file name `modal.blade.php` then you may automatically use the custom alias/directive `@_modal` in Blade templates.

Please note that this does not create a _component alias_ automatically, which is different than an include alias. A component alias would require the use of both `@_modal` and `@end_modal` since it is expecting a slot in between.

If you need to use a slot for whatever reason, use Laravel's built-in directive `@component`.

**References:**

- [Blade Templates - Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/5.8/blade#components-and-slots)
- [How to Use Blade Component and Include Aliases](https://laravel-news.com/blade-component-include-aliases)

---

## Component Structure

Every component will have a possible three top-tier options.

- 'options'
  - `'show_comp'` will always be an option to dynamically hide or show component.
- 'data'
  - 'data' options will depend on the component. Read the component's documentation to see what is needed.
- 'classes'
  - `'comp'` will always be an option to style the most external element in component.
  - Might be required depending on component.

Below is an example of what calling a component might look like.

```php
  @_example_component([
    'options' => [
        'show_comp' => true // Always available
    ],
    'data' => [
        'title' => 'I am a component',
        'sub-title' => 'This is a sub-title'
    ]
    'classes' => [
        'comp' => 'pv-4 px-4' // Always available
        'background' => 'bg-primary',
        'title' => 'text-white'
    ]
  ])
```
