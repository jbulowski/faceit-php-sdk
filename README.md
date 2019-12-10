# Documentation

_Currently only supports the `search` endpoints_

## Installation

`composer require jbulowski/faceit-php-sdk`

## Initialization

```
$faceit = new FaceitClient\FaceitClient([
    'api_key' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
]);
```

## Endpoints

#### Championships ✓

<details>
<summary>Click to expand</summary>
<p>

**details**

`$championship = $faceit->championship('id')->details();`

**matches**

`$championship_matches = $faceit->championship('id')->matches();`

**subscriptions**

`$championship_subscriptions = $faceit->championship('id')->subscriptions();`

</p>
</details>

#### ~~Games~~

#### ~~Hubs~~

#### ~~Leaderboards~~

#### ~~Matches~~

#### ~~Organizers~~

#### ~~Players~~

#### ~~Rankings~~

#### Search ✓

<details>
<summary>Click to expand</summary>
<p>

**championships**

`$championships = $faceit->search()->championships('name');`

**hubs**

`$hubs = $faceit->search()->hubs('name');`

**organizers**

`$organizers = $faceit->search()->organizers('name');`

**players**

`$players = $faceit->search()->players('nickname');`

**teams**

`$teams = $faceit->search()->teams('nickname');`

**tournaments**

`$tournaments = $faceit->search()->tournaments('name');`


</p>
</details>

#### ~~Teams~~

#### ~~Tournaments~~