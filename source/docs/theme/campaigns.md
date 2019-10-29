---
title: Campaigns | Press Theme
description: How to work with and create campaigns
extends: _layouts.documentation
section: content
---

# Theme › Campaigns {#campaigns}

## Getting campaign data {#data}

All campaigns are accessible through the `Campaign` object if provided a campaign segment code.

```php
$campaign = new Campaign('campaign_segment_code');
echo '$' . $campaign->match;
```

Alternatively, you can access campaign data through a helper function:

```php
echo campaign('campaign_segment_code')->days_left . 'days';
```

### Returnable Data

```php
$campaign = new Campaign('campaign_segment_code');

$campaign->match; // Returns formatted dollar value of match amount (without '$' but including ',')
$campaign->goal; // Returns formatted dollar value of goal amount (without '$' but including ',')
$campaign->funded; // Returns formatted dollar value of current funding (without '$' but including ',')
$campaign->percent; // Returns percentage of goal met
$campaign->percent('match'); // Alternate way of returning percentage, particularly of match met
$campaign->end_date; // Returns end date of campaign. Default format: 'F jS, Y'
$campaign->end_date('m/d/Y g:i a'); // Alternate way of returning end date by supplying custom format
$campaign->days_left; // Returns days remaining of campaign
$campaign->raw('funded'); // Returns raw field data
```

## Creating new campaigns {#create}

New campaigns are created via [Advanced Custom Fields](https://www.advancedcustomfields.com). You can do this by logging into the Wordpress' admin panel and navigating to the [campaign options page](https://frontiersusa.org/wp-admin/admin.php?page=acf-options-campaigns). Here you will need to provide a valid segment code from a Virtuous campaign.

[More needed here]
