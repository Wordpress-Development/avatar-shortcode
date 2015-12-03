# Avatar Shortcode (for Wordpress)

Display an avatar using a shortcode. Currently if no id is set, the current logged in user's avatar will be displayed. I will be adding more options soon (for example commenter avatar, author avatar, etc.)...

## Useage:

### Shortcode
`[get_avatar size="128" class="img-circle" alt="Commenter Avatar" extra_attr="nopin='nopin'"]`

### Output
```html
<img alt="Commenter Avatar" src="http://1.gravatar.com/avatar/...?s=128&amp;d=mm" srcset="http://1.gravatar.com/avatar/...?s=256&amp;d=mm 2x" class="avatar avatar-128 photo img-circle" height="128" width="128" nopin="nopin">
```

## Arguements and Examples:

 - `id` = "2" or "foo@example.com"
 - `size` = "64"
 - `default` = "mystery"
 - `alt` = "Avatar Image"
 - `height` = "32"
 - `width` = "32"
 - `rating` = "PG"
 - `class` = "img-circle"
 - `force_display` = "true"
 - `extra_attr` = "nopin='nopin'"
 

## Options

Want to style avatars for certain sections of your site? Simply add a class to the shortcode and then add your css to your site. For example to make a round avatar image you'd do this:

`[get_avatar class="img-circle"]`

And then add css to your theme for the round avatar display:

```css
.avatar.img-circle{
    vertical-align: middle;
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%
}
```
