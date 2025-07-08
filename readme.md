# Accesstive WordPress Plugin

**Version**: 1.0.0  
**Author**: Accesstive  
**License**: GPLv2 or later  
**Requires WordPress**: 4.0+  
**Tested up to**: 6.4  
**Requires PHP**: 7.0+  

## Description

Accesstive is an all-in-one accessibility platform that helps websites become inclusive, compliant, and user-friendly. It combines powerful tools like an accessibility assistant widget, AI-based live audits, monitoring, and an intelligent assistant. Designed for businesses, developers, and agencies—Accesstive makes accessibility simple, scalable, and smart.

## Features

- **AI-Powered Assistant Widget**: 40+ accessibility features including screen reader support, keyboard navigation, and visual adjustments
- **Dashboard Integration**: Full-screen access to Accesstive dashboard from WordPress admin
- **Automatic Script Injection**: No coding required - works out of the box
- **WCAG Compliance Support**: Helps address common accessibility barriers
- **Performance Optimized**: Asynchronous loading with no impact on site speed
- **Customizable**: Extensive customization options for branding and functionality

## Installation

### Method 1: WordPress Admin (Recommended)

1. Download the plugin ZIP file
2. Log into your WordPress admin panel
3. Navigate to **Plugins → Add New → Upload Plugin**
4. Choose the downloaded ZIP file
5. Click **Install Now**
6. Click **Activate** after installation completes

### Method 2: FTP Upload

1. Extract the plugin ZIP file
2. Upload the `accesstive` folder to `/wp-content/plugins/`
3. Log into WordPress admin
4. Navigate to **Plugins → Installed Plugins**
5. Find "Accesstive" and click **Activate**

### Method 3: WP-CLI

```bash
wp plugin install accesstive.zip --activate
```

## Accesstive App

Once installed, you can access the Accesstive dashboard directly from your WordPress admin:

1. Look for the **Accesstive** menu item in your WordPress admin sidebar
2. Click on it to open the full-screen dashboard
3. Log in with your Accesstive credentials
4. Manage all accessibility features and settings from the integrated dashboard

## Preview

After activation, the Accesstive assistant widget will automatically appear on your website:

- **Frontend Widget**: Floating accessibility icon for visitors
- **40+ Features**: Font sizing, color contrast, keyboard navigation, screen reader support, and more
- **User Customization**: Visitors can personalize settings based on their needs
- **Admin Dashboard**: Complete accessibility management interface

## File Structure

```
accesstive/
├── accesstive.php          # Main plugin file
├── readme.txt              # WordPress plugin readme
├── languages/              # Translation files
└── assets/                 # Plugin assets (if any)
```

## Code Overview

### Main Plugin Class

The plugin uses a single class `AccesstivePlugin` that handles:

- **Admin Menu**: Adds Accesstive menu item to WordPress admin
- **Script Injection**: Automatically adds assistant script to all frontend pages
- **Dashboard Integration**: Embeds Accesstive dashboard in WordPress admin
- **Activation/Deactivation**: Handles plugin lifecycle events

### Key Methods

- `add_admin_menu()`: Creates admin menu item
- `admin_page()`: Displays dashboard iframe
- `add_assistant_script()`: Injects assistant script in footer
- `activate()` / `deactivate()`: Plugin lifecycle management

## Uninstallation

To remove Accesstive:

1. **Deactivate**: Go to **Plugins → Installed Plugins** and deactivate Accesstive
2. **Delete**: Click **Delete** to remove all plugin files
3. **Clean Up**: No database entries are created, so no additional cleanup is needed

## Known Issues

- **Theme Conflicts**: Some themes may interfere with widget positioning
- **Plugin Conflicts**: Rare conflicts with other accessibility plugins
- **Caching**: Some caching plugins may require cache clearing after installation

## Troubleshooting

### Widget Not Appearing

1. Check if plugin is activated
2. Verify script is loading (check browser dev tools)
3. Clear site cache
4. Check for JavaScript errors in console

### Dashboard Not Loading

1. Check internet connection
2. Verify browser allows iframes
3. Clear browser cache
4. Disable browser extensions temporarily

### Performance Issues

1. Check for plugin conflicts
2. Test with default theme
3. Verify server resources
4. Contact support if issues persist

## Changelog

### 1.0.0 (2024-01-01)
- Initial release
- Dashboard integration with iframe embedding
- Assistant widget automatic injection
- WordPress 4.0+ compatibility
- PHP 7.0+ support
- Multilingual support structure
- Performance optimizations

## Support

For support and additional resources:

- **Website**: [https://accesstive.com](https://accesstive.com)
- **Documentation**: Complete guides and API documentation
- **Community**: WordPress forums and support channels

## FAQ

**Q: Do I need an Accesstive account?**  
A: Yes, you&apos;ll need to create an account at [accesstive.com](https://accesstive.com) to access the full dashboard features.

**Q: Will this work with my theme?**  
A: Yes, the plugin is designed to work with all WordPress themes. The assistant widget uses absolute positioning to avoid conflicts.

**Q: Can I customize the widget appearance?**  
A: Yes, extensive customization options are available through the Accesstive dashboard.

**Q: Is this compatible with caching plugins?**  
A: Yes, the plugin is compatible with all major caching solutions.

**Q: Does this guarantee WCAG compliance?**  
A: While Accesstive significantly improves accessibility, complete WCAG compliance may require additional measures beyond what any single tool can provide.

## License

This plugin is licensed under the GPLv2 or later. See the [GNU General Public License](https://www.gnu.org/licenses/gpl-2.0.html) for more details.

## Contributing

Contributions are welcome! Please visit our [GitHub repository](https://github.com/accesstive/wordpress-plugin) for development guidelines and to submit issues or pull requests.