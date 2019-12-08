# Documentation

_Currently only supports the `search` endpoints_

## Initialization

```
$faceit = new FaceitClient\FaceitClient([
    'api_key' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
]);
```

## Endpoints

#### ~~Championships~~

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