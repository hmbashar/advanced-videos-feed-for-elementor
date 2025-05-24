=== Advanced Videos Feed for Elementor ===
Contributors: hmbashar
Tags: elementor, videos, feed, youtube, vimeo
Requires at least: 5.0
Tested up to: 6.8
Stable tag: 1.0.0
Requires PHP: 8.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Display beautiful video feeds from various sources using Elementor widgets.

== Description ==

Advanced Videos Feed for Elementor allows you to showcase video content from various platforms in your Elementor-powered WordPress website. Create engaging video galleries, feeds, and displays with ease.

[View Demo](https://lonelytime.s3-tastewp.com/advance-video-feed-for-elementor/)


== External Services ==

This plugin uses the YouTube Data API v3 to fetch and display videos. Here's what you need to know:

* Service Provider: Google's YouTube Data API v3
* Purpose: To fetch video data from YouTube channels and playlists
* Data Transmission: 
  - The plugin sends requests to YouTube's API with your API key
  - For channel feeds: Requests include channel ID and maximum results count
  - For playlist feeds: Requests include playlist ID and maximum results count
* Privacy & Terms:
  - YouTube API Services Terms of Service: https://developers.google.com/youtube/terms/api-services-terms-of-service
  - Google Privacy Policy: https://policies.google.com/privacy

= Current Features =
* Easy integration with Elementor
* YouTube video platform support
* Customizable video layouts
* Responsive design
* Video thumbnail display options
* Grid and list layout options

= Upcoming Features =
* Support for multiple video platforms (Vimeo and others)
* Custom play button styles
* Lazy loading support

= Video Tutorials =
* [How to Get YouTube API Key](https://www.youtube.com/watch?v=EPeDTRNKAVo)
* [How to Find Your YouTube Channel ID](https://www.youtube.com/watch?v=3mrKjzrIiq4)
* [How to Find YouTube Playlist ID](https://www.youtube.com/watch?v=Irz1mN_duAU)

= How to Use =

**Getting Started:**
1. Get your YouTube API Key:
   * Go to Google Cloud Console
   * Create a new project or select existing
   * Enable YouTube Data API v3
   * Create credentials (API Key)
   * Watch the [tutorial video](https://www.youtube.com/watch?v=EPeDTRNKAVo) for detailed steps

2. Find your Channel ID:
   * Go to your YouTube channel page
   * Right-click and select "View Page Source"
   * Search for "channelId"
   * Or watch the [tutorial video](https://www.youtube.com/watch?v=3mrKjzrIiq4) for guidance

3. For Playlist Feed:
   * Go to your YouTube playlist
   * Copy the ID from the URL (starts with "PL")
   * Watch the [tutorial video](https://www.youtube.com/watch?v=Irz1mN_duAU) for help
[youtube https://www.youtube.com/watch?v=YOUR_VIDEO_ID]

= Available Fields and Settings =

**General Settings:**
* Layout Type - Choose between grid or list layout
* Columns - Set number of columns for grid layout
* Items Per Page - Control how many videos to display
* Title - Show/hide video title
* Description - Show/hide video description
* Thumbnail Size - Select video thumbnail quality

**Query Settings:**
* Channel ID - Your YouTube channel ID
* Playlist ID - YouTube playlist ID
* Video Count - Number of videos to fetch
* Cache Duration - How long to cache the feed

**Style Settings:**
* Title Color - Customize title text color
* Description Color - Set description text color
* Background Color - Change item background
* Padding & Margin - Adjust spacing
* Border - Customize border style

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/advanced-videos-feed-for-elementor` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Elementor editor to add video feed widgets to your pages

== Frequently Asked Questions ==

= Which video platforms are supported? =

The plugin currently supports YouTube. Vimeo and other platforms will be supported in future updates.


= Is this plugin compatible with the latest Elementor version? =

Yes, this plugin is regularly tested and updated to maintain compatibility with the latest Elementor version.

== Changelog ==

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.0.0 =
Initial release of the plugin.