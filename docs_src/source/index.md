---
title: About
layout: clean
---

# The HelpmateCSS Utility

This is an "Static Atomic CSS Library" to avoid massive code repeating (by re-adding the same properties always, for example). This is a collection of CSS common properties turned into Utility Classes.

This library dont have a grid system. Helpmate provides a collection of helpers to apply current and simply styles avoiding repeat same code every single class to do simple things as deal with display responsive rules, for example. You can use this library to turn your html components more descriptive when working in a team.

YOU CAN GET THE FILES HERE:
https://github.com/felippe-regazio/helpmateCSS/tree/master/dist

# Getting Started:

Add the library to your head and apply the classes in according to your needings.
Se the which classes to apply and how to use them on the index below.

```html
<link rel="stylesheet" type="text/css" href="whatever/dist/helpmate.min.css">
```

# Content Index

- {% post_link background %}
- {% post_link center %}
- {% post_link cursor %}
- {% post_link hiding %}
- {% post_link list %}
- {% post_link margin %}
- {% post_link overflow %}
- {% post_link padding %}
- {% post_link resize %}
- {% post_link text %}
- {% post_link visibility %}
- {% post_link width-height %}

# Examples

Commonly the prefixes are constructed from common abreviations. If the property has two words, so the
helpmate prefix will be the first letter of each word (fw for font-weight for ex). So, the library follows
a simple pattern. You must check the documentation to see the complete list of features. Here we'll show
a simple overview of the usage:

#### Properties and Values

```html
<!-- prefix:value -->
<div class="bg:none ovf:scroll">
  <p>hello</p>
</div>
```

So, you must add the prefix of the property you want to change (bg for background, for example), followed
by the :value that you want to apply - bg:cover or bg:auto to change background behavior for example.

#### Sizes

```html
<!-- prefix:size -->
<div class="pad:xs">
  <p>hello</p>
</div>
```

The properties that depends from sizes will accept the following values: xs, md, lg, xl. Those values corresponds to: extra small, medium, large and extra large.

#### Direction

```html
<!-- prefix-direction:value -->
<div class="pad-l:xs">
  <p>hello</p>
</div>
```

The direction can be left, right, top or bottom, and are represented by their first letter. l: left; r: right; t: top; b: bottom/ You can use VE and HZ to apply vertical and horizontal styles. For example:

```html
<!-- Apply a vertical (left, right) extra large padding -->
<div class="pad-ve:xl">
  <p>hello</p>
</div>
<!-- Apply a horizontal (top, bottom) larg padding -->
<div class="pad-hz:lg">
  <p>hello</p>
</div>
```

# The Base Value

The base value on HelpmateCSS is 14px. That means all the values that represents sizes will be calculated based on this value.
This give us the following sizes:

- xl -> 14px * 4
- lg -> 14px * 3
- md -> 14px * 2
- 14px (base value)
- sm -> 14px / 2
- xs -> 14px / 4

This base value is a css custom property, the --hm-gutter. You can override this value at you code anyway and anywhere you want using css custom properties. To change the base value, you can just reassign the --hm-gutter. For example:

```css
:root {
  // resign the gutter for whole page
  --hm-gutter: 20px;
}
.custom {
  // resign the gutter for this class
  --hm-gutter: 8px;
}
```

# Github

Fork this project on Github:
https://github.com/felippe-regazio/helpmateCSS

# Credits and License

HelpmateCSS by Felippe Regazio, under MIT license.