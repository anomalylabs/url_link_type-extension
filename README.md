# URL Link Type Extension

A URL link type for the PyroCMS Navigation module that enables creating menu links to custom URLs.

## Description

This extension provides a simple yet powerful link type for the Navigation module, allowing you to add links to any URL in your navigation menus. Perfect for external links, absolute URLs, or dynamic URLs using template variables.

## Features

- **Custom URLs**: Link to any internal or external URL
- **Dynamic Variables**: Support for template parsing in URLs
- **Title Management**: Set custom titles for each link
- **Description Support**: Add descriptions for accessibility and SEO
- **Translation Ready**: Full internationalization support
- **Simple Interface**: Easy-to-use form for creating URL links

## Installation

This extension is typically included with PyroCMS. If you need to install it separately:

```bash
composer require anomaly/url_link_type-extension
```

## Usage

### Creating URL Links in Navigation

1. Navigate to **Structure > Navigation** in the PyroCMS control panel
2. Edit or create a menu
3. Click **Add Link**
4. Select **URL** as the link type
5. Fill in the form:
   - **Title**: The text displayed for the link
   - **URL**: The destination URL
   - **Description**: Optional description for the link
6. Save the link

### URL Examples

#### External Links
```
https://pyrocms.com
https://github.com/pyrocms/pyrocms
mailto:support@example.com
tel:+1-555-0123
```

#### Internal Links
```
/about
/contact
/blog/latest-post
```

#### Absolute URLs
```
{{ url('admin/dashboard') }}
{{ url_route('pages::index') }}
```

#### Dynamic Variables
```
/users/{{ user.username }}
/posts/{{ request_segment(2) }}
{{ config('app.url') }}/external
```

## Template Variables

The URL field supports template parsing, allowing you to use variables:

### Available Variables

```twig
{# Request Variables #}
{{ request_path() }}
{{ request_segment(1) }}
{{ request_url() }}

{# User Variables #}
{{ user.id }}
{{ user.username }}
{{ user.email }}

{# Config Variables #}
{{ config('app.url') }}
{{ config('streams::distribution.name') }}

{# URL Helpers #}
{{ url('path') }}
{{ url_route('route.name') }}
{{ url_secure('path') }}

{# Environment #}
{{ env('APP_URL') }}
```

### Dynamic URL Examples

```twig
{# Link to user profile #}
/profile/{{ user.username }}

{# Link with current path segment #}
/category/{{ request_segment(2) }}/products

{# External site with config #}
{{ config('services.social.twitter') }}/{{ config('company.handle') }}

{# Conditional URL #}
{{ user ? '/dashboard' : '/login' }}
```

## Fields

### Title
- **Type**: Text
- **Required**: Yes
- **Description**: The link text displayed in navigation
- **Translatable**: Yes

### URL
- **Type**: Text
- **Required**: Yes
- **Description**: The destination URL (supports template variables)
- **Translatable**: Yes

### Description
- **Type**: Textarea
- **Required**: No
- **Description**: Optional description for accessibility and SEO
- **Translatable**: Yes

## Code Examples

### Programmatically Creating URL Links

```php
use Anomaly\NavigationModule\Link\Contract\LinkRepositoryInterface;
use Anomaly\UrlLinkTypeExtension\UrlLinkTypeModel;

// Create the URL entry
$urlEntry = UrlLinkTypeModel::create([
    'title'       => 'PyroCMS Website',
    'url'         => 'https://pyrocms.com',
    'description' => 'Visit the official PyroCMS website',
]);

// Create the navigation link
$links = app(LinkRepositoryInterface::class);

$link = $links->create([
    'menu'       => $menu,
    'type'       => 'anomaly.extension.url_link_type',
    'entry_id'   => $urlEntry->getId(),
    'entry_type' => get_class($urlEntry),
    'target'     => '_blank', // Open in new tab
    'class'      => 'external-link',
]);
```

### Accessing Link Data in Templates

```twig
{# In a navigation template #}
{% for link in menu.links %}
    <a href="{{ link.url }}" 
       {% if link.target %}target="{{ link.target }}"{% endif %}
       {% if link.class %}class="{{ link.class }}"{% endif %}
       {% if link.entry.description %}title="{{ link.entry.description }}"{% endif %}>
        {{ link.title }}
    </a>
{% endfor %}
```

### Custom Link Type Form

```php
namespace Acme\Extension\CustomLinkType;

use Anomaly\UrlLinkTypeExtension\UrlLinkTypeExtension;

class CustomLinkTypeExtension extends UrlLinkTypeExtension
{
    protected $provides = 'acme.extension.custom_link_type';
    
    public function url(LinkInterface $link)
    {
        $url = parent::url($link);
        
        // Add custom processing
        return $url . '?utm_source=menu';
    }
}
```

## Use Cases

### External Resources
Link to external websites, documentation, or partner sites.

```
https://docs.pyrocms.com
https://community.pyrocms.com
https://github.com/pyrocms
```

### Contact Methods
Create direct communication links.

```
mailto:support@example.com
tel:+1-555-0123
sms:+1-555-0123
```

### Social Media
Link to social media profiles.

```
https://twitter.com/pyrocms
https://facebook.com/pyrocms
https://linkedin.com/company/pyrocms
```

### Dynamic Pages
Create links based on context or user data.

```
/user/{{ user.username }}
/category/{{ current_category.slug }}
```

### Application Routes
Link to specific application routes.

```
{{ url_route('admin.dashboard') }}
{{ url_route('posts.show', [post.id]) }}
```

## Best Practices

### Protocol Usage
Always include the protocol for external links:
```
✓ https://example.com
✗ example.com
```

### Relative vs Absolute
- Use relative URLs for internal links: `/about`
- Use absolute URLs for external links: `https://external.com`

### Security
- Validate external URLs to prevent XSS
- Use `rel="noopener"` for external links opened in new tabs
- Sanitize user-generated URLs

### Accessibility
- Always provide descriptive titles
- Use descriptions for screen readers
- Ensure link text is meaningful

### Performance
- Avoid excessive dynamic parsing
- Cache generated URLs when possible
- Test complex template variables

## Link Attributes

Additional attributes can be set on links:

```php
$link->update([
    'target' => '_blank',    // Open in new window
    'class'  => 'btn-primary', // CSS classes
    'rel'    => 'nofollow',  // Link relationship
]);
```

## Integration

This extension integrates with:

- **Navigation Module** - Provides URL link type
- **Streams Platform** - Uses streams for data management
- **Translation System** - Full multilingual support
- **Template Engine** - Supports Twig variables in URLs

## Requirements

- PyroCMS 3.x
- Anomaly Streams Platform ^1.8
- Anomaly Navigation Module

## Support

- **Email**: support@anomaly.is
- **Website**: http://pyrocms.com/
- **Documentation**: [PyroCMS Documentation](https://pyrocms.com/documentation)

## License

This extension is open-sourced software licensed under the [MIT license](LICENSE.md).

## Authors

- **PyroCMS, Inc.** - [Website](http://pyrocms.com/) - support@pyrocms.com
