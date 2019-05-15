# String Urldecode plugin for Craft CMS 3.x

Twig filters to urldecode a string.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require akagibi/string-urldecode

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for String Urldecode.

## Using String Urlencode

Input:

    {{ "Text%20without%20space" | base64enc }}

Output:

    Text without space

Brought to you by [Akagibi](https://www.akagibi.com)
