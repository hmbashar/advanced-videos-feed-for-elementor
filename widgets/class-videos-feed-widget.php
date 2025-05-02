<?php
namespace AVFFE\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Videos_Feed_Widget extends Widget_Base {

    public function get_name() { return "avffe_videos_feed"; }

    public function get_title() { return "Advanced Videos Feed"; }

    public function get_icon() { return "eicon-youtube"; }

    public function get_categories() { return ["general"]; }

    public function get_style_depends() {
        return ['advance-videos-feed'];
    }

    protected function register_controls() {
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('YouTube Settings', 'advance-videos-feed'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'api_key',
            [
                'label' => __('YouTube API Key', 'advance-videos-feed'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => 'YOUR API KEY',
                'description' => __('How to get YouTube API Key:<br>
                1. Go to Google Cloud Console<br>
                2. Create a new project or select existing<br>
                3. Enable YouTube Data API v3<br>
                4. Create credentials (API Key)<br>
                5. Copy and paste your API key here<br>
                <br>
                Watch Step by Step Tutorial: <a href="https://www.youtube.com/watch?v=EPeDTRNKAVo" target="_blank">How to Get YouTube API Key</a>', 'advance-videos-feed'),
            ]
        );

        $this->add_control(
            'source_type',
            [
                'label' => __('Source Type', 'advance-videos-feed'),
                'type' => Controls_Manager::SELECT,
                'default' => 'channel',
                'options' => [
                    'channel' => __('Channel', 'advance-videos-feed'),
                    'playlist' => __('Playlist', 'advance-videos-feed'),
                ],
            ]
        );

        $this->add_control(
            'channel_id',
            [
                'label' => __('YouTube Channel ID', 'advance-videos-feed'),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => 'UC_x5XG1OV2P6uZZ5FSM9Ttw',
                'description' => __('How to find your Channel ID:<br>
                1. Go to your YouTube channel page<br>
                2. Right-click and select "View Page Source"<br>
                3. Press Ctrl+F (Cmd+F on Mac) and search for "channelId"<br>
                4. You\'ll find your ID like: "channelId":"UC..."<br>
                <br>
                Alternative Method:<br>
                1. Go to your channel\'s homepage<br>
                2. Look at the URL: youtube.com/channel/<strong>YOUR_CHANNEL_ID</strong><br>
                3. If you see "c/" or "user/" instead, you need to find the channel ID using the first method<br>
                <br>
                Watch Tutorial: <a href="https://www.youtube.com/watch?v=3mrKjzrIiq4" target="_blank">How to Find YouTube Channel ID</a>', 'advance-videos-feed'),
                'condition' => [
                    'source_type' => 'channel',
                ],
            ]
        );

        $this->add_control(
            'playlist_id',
            [
                'label' => __('YouTube Playlist ID', 'advance-videos-feed'),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => 'PLxxxxxxxxxxxxxxx',
                'description' => __('How to find Playlist ID:<br>
                1. Go to your YouTube playlist<br>
                2. Look at the URL: youtube.com/playlist?list=<strong>YOUR_PLAYLIST_ID</strong><br>
                3. Copy the ID that starts with "PL"<br>
                <br>
                Watch Tutorial: <a href="https://www.youtube.com/watch?v=Irz1mN_duAU" target="_blank">How to Find YouTube Playlist ID</a>', 'advance-videos-feed'),
                'condition' => [
                    'source_type' => 'playlist',
                ],
            ]
        );

        $this->add_control(
            'display_type',
            [
                'label' => __('Display Type', 'advance-videos-feed'),
                'type' => Controls_Manager::SELECT,
                'default' => 'grid',
                'options' => [
                    'grid' => __('Grid', 'advance-videos-feed'),
                    'list' => __('List', 'advance-videos-feed'),
                ],
            ]
        );

        $this->add_control(
            'columns',
            [
                'label' => __('Columns', 'advance-videos-feed'),
                'type' => Controls_Manager::SELECT,
                'default' => '3',
                'options' => [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                ],
                'condition' => [
                    'display_type' => 'grid',
                ],
            ]
        );

        $this->add_control(
            'video_count',
            [
                'label' => __('Number of Videos', 'advance-videos-feed'),
                'type' => Controls_Manager::NUMBER,
                'default' => 6,
                'min' => 1,
                'max' => 50,
            ]
        );

        $this->end_controls_section();

        // Style Section
        $this->start_controls_section(
            'style_section',
            [
                'label' => __('Style Settings', 'advance-videos-feed'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'advance-videos-feed'),
                'type' => Controls_Manager::COLOR,
                'default' => '#333333',
                'selectors' => [
                    '{{WRAPPER}} .video-title a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'title_hover_color',
            [
                'label' => __('Title Hover Color', 'advance-videos-feed'),
                'type' => Controls_Manager::COLOR,
                'default' => '#ff0000',
                'selectors' => [
                    '{{WRAPPER}} .video-title a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
                'selector' => '{{WRAPPER}} .video-title',
			]
		);      

        $this->add_control(
            'thumbnail_border_radius',
            [
                'label' => __('Thumbnail Border Radius', 'advance-videos-feed'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'default' => [
                    'top' => 8,
                    'right' => 8,
                    'bottom' => 8,
                    'left' => 8,
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .video-thumbnail' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'thumbnail_spacing',
            [
                'label' => __('Thumbnail Spacing', 'advance-videos-feed'),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'size' => 20,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .avffe-grid' => 'grid-gap: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .avffe-list .video-item' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $api_key = $settings['api_key'];
        $source_type = $settings['source_type'];
        $max_results = $settings['video_count'];
        $display_type = $settings['display_type'];
        $columns = $settings['columns'];

        if (empty($api_key)) {
            echo '<p class="avffe-error">' . __('Please enter your YouTube API Key in the widget settings.', 'advance-videos-feed') . '</p>';
            return;
        }

        $api_url = '';
        if ($source_type === 'channel') {
            $channel_id = $settings['channel_id'];
            if (empty($channel_id)) {
                echo '<p class="avffe-error">' . __('Please enter a Channel ID.', 'advance-videos-feed') . '</p>';
                return;
            }
            $api_url = "https://www.googleapis.com/youtube/v3/search?key={$api_key}&channelId={$channel_id}&part=snippet,id&order=date&maxResults={$max_results}&type=video";
        } else {
            $playlist_id = $settings['playlist_id'];
            if (empty($playlist_id)) {
                echo '<p class="avffe-error">' . __('Please enter a Playlist ID.', 'advance-videos-feed') . '</p>';
                return;
            }
            $api_url = "https://www.googleapis.com/youtube/v3/playlistItems?key={$api_key}&playlistId={$playlist_id}&part=snippet&maxResults={$max_results}";
        }

        $response = wp_remote_get($api_url);

        if (is_wp_error($response)) {
            echo '<p class="avffe-error">' . __('Error fetching videos. Please check your API key and settings.', 'advance-videos-feed') . '</p>';
            return;
        }

        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body);

        if (empty($data->items)) {
            echo '<p class="avffe-error">' . __('No videos found.', 'advance-videos-feed') . '</p>';
            return;
        }

        $grid_class = $display_type === 'grid' ? 'avffe-grid avffe-columns-' . $columns : 'avffe-list';
        echo "<div class='advance-videos-feed {$grid_class}'>";

        foreach ($data->items as $item) {
            if ($source_type === 'channel' && isset($item->id->videoId)) {
                $video_id = $item->id->videoId;
            } elseif ($source_type === 'playlist' && isset($item->snippet->resourceId->videoId)) {
                $video_id = $item->snippet->resourceId->videoId;
            } else {
                continue;
            }

            $title = esc_html($item->snippet->title);
            $thumbnail = $item->snippet->thumbnails->medium->url;
            $description = wp_trim_words(esc_html($item->snippet->description), 15, '...');
            $published_at = date('M j, Y', strtotime($item->snippet->publishedAt));
            
            echo "<div class='video-item'>";
            echo "<div class='video-thumbnail'>";
            echo "<a href='https://www.youtube.com/watch?v={$video_id}' target='_blank' rel='noopener'>";
            echo "<img src='{$thumbnail}' alt='{$title}' loading='lazy'>";
            echo "<div class='play-button'></div>";
            echo "</a>";
            echo "</div>";
            echo "<div class='video-content'>";
            echo "<h3 class='video-title'><a href='https://www.youtube.com/watch?v={$video_id}' target='_blank' rel='noopener'>{$title}</a></h3>";
            echo "<p class='video-description'>{$description}</p>";
            echo "<span class='video-date'>{$published_at}</span>";
            echo "</div>";
            echo "</div>";
        }

        echo "</div>";
    }
}