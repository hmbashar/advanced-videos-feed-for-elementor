# Advanced Videos Feed for Elementor

Display beautiful video feeds from various sources using Elementor widgets. This plugin allows you to showcase video content from YouTube in your Elementor-powered WordPress website.

## Description

Advanced Videos Feed for Elementor is a powerful WordPress plugin that enables you to create engaging video galleries, feeds, and displays with ease. Perfect for content creators, bloggers, and website owners who want to showcase their video content professionally.

## Features

- 🎯 Easy integration with Elementor
- 📺 YouTube video platform support
- 🎨 Customizable video layouts
- 📱 Responsive design
- 🖼️ Video thumbnail display options
- 📊 Grid and list layout options

## External Services

This plugin uses the YouTube Data API v3 to fetch and display videos:

- **Service Provider**: Google's YouTube Data API v3
- **Purpose**: To fetch video data from YouTube channels and playlists
- **Data Transmission**: 
  - The plugin sends requests to YouTube's API with your API key
  - For channel feeds: Requests include channel ID and maximum results count
  - For playlist feeds: Requests include playlist ID and maximum results count
- **Privacy & Terms**:
  - [YouTube API Services Terms of Service](https://developers.google.com/youtube/terms/api-services-terms-of-service)
  - [Google Privacy Policy](https://policies.google.com/privacy)

## Installation

1. Upload the plugin files to the `/wp-content/plugins/advanced-videos-feed-for-elementor` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Elementor editor to add video feed widgets to your pages

## Getting Started

### 1. Get your YouTube API Key
- Go to Google Cloud Console
- Create a new project or select existing
- Enable YouTube Data API v3
- Create credentials (API Key)
- [Watch the tutorial video](https://www.youtube.com/watch?v=EPeDTRNKAVo) for detailed steps

### 2. Find your Channel ID
- Go to your YouTube channel page
- Right-click and select "View Page Source"
- Search for "channelId"
- [Watch the tutorial video](https://www.youtube.com/watch?v=3mrKjzrIiq4) for guidance

### 3. For Playlist Feed
- Go to your YouTube playlist
- Copy the ID from the URL (starts with "PL")
- [Watch the tutorial video](https://www.youtube.com/watch?v=Irz1mN_duAU) for help

## Available Settings

### General Settings
- Layout Type (grid/list)
- Columns for grid layout
- Items Per Page
- Title visibility
- Description visibility
- Thumbnail Size

### Query Settings
- Channel ID
- Playlist ID
- Video Count
- Cache Duration

### Style Settings
- Title Color
- Description Color
- Background Color
- Padding & Margin
- Border Style

## Requirements

- WordPress 5.0 or higher
- PHP 8.0 or higher
- Elementor Plugin installed and activated

## Support

For support, please use the [WordPress.org plugin forum](https://wordpress.org/support/plugin/advanced-videos-feed-for-elementor/).

## License

GPLv2 or later. See [License URI](https://www.gnu.org/licenses/gpl-2.0.html) for details.

## Changelog

### 1.0.0
- Initial release

## Contributing

Contributions are welcome! Feel free to submit pull requests or create issues for bugs and feature requests.
