# Avatar Shortcode (for Wordpress)

## Useage:

```JSON
[get_avatar size="128" class="round" alt="Commenter Avatar" extra_attr="nopin='nopin'"]
```

```html
<img alt="Commenter Avatar" src="http://1.gravatar.com/avatar/1e5318e4e32980c273cc2e58d2fbc82c?s=128&amp;d=mm" srcset="http://1.gravatar.com/avatar/1e5318e4e32980c273cc2e58d2fbc82c?s=256&amp;d=mm 2x" class="avatar avatar-128 photo pinterest-nopin" height="128" width="128" nopin="nopin">
```

## Arguements:

 - `id`
 - `size`
 - `default`
 - `alt`
 - `height`
 - `width`
 - `force_default`
 - `rating`
 - `class`
 - `force_display`
 - `extra_attr`
 

## Options

Want to style avatars for certain sections of your site? Simply add a class to the shortcode and then add your css to your site. For example to make a round avatar image you'd do this:

```html
[get_avatar class="img-circle"]
```

And then add css to your theme for the round avatar display:

```css
.avatar.img-circle{
    vertical-align: middle;
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%
}
```
