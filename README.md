# Documentation

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

`$championship = $faceit->championship('id')->details([array $additional_request_parameters]);`

**matches**

`$championship_matches = $faceit->championship('id')->matches([array $additional_request_parameters]);`

**subscriptions**

`$championship_subscriptions = $faceit->championship('id')->subscriptions([array $additional_request_parameters]);`

</p>
</details>

#### Games ✓

<details>
<summary>Click to expand</summary>
<p>

**games**

`$games = $faceit->games()->details([array $additional_request_parameters]);`

**game**

`$game = $faceit->games()->game('game');`

**parent**

`$game_parent = $faceit->games()->parenOf('game');`

</p>
</details>

#### ~~Hubs~~

#### ~~Leaderboards~~

#### Matches ✓

<details>
<summary>Click to expand</summary>
<p>

**details**

`$match = $faceit->matches('id')->details();`

**stats**

`$stats = $faceit->matches('id')->stats();`

</p>
</details>

#### ~~Organizers~~

#### ~~Players~~

#### Rankings ✓

<details>
<summary>Click to expand</summary>
<p>

**global ranking**

`$global_ranking = $faceit->rankings()->game('csgo')->region('EU')->details([array $additional_request_parameters]);`

**player ranking**

`$player_ranking = $faceit->rankings()->game('id')->region('region')->player('id' [, array $additional_request_parameters]);`

</p>
</details>

#### Search ✓

<details>
<summary>Click to expand</summary>
<p>

**championships**

`$championships = $faceit->search()->championships('name' [, array $additional_request_parameters]);`

**hubs**

`$hubs = $faceit->search()->hubs('name' [, array $additional_request_parameters]);`

**organizers**

`$organizers = $faceit->search()->organizers('name' [, array $additional_request_parameters]);`

**players**

`$players = $faceit->search()->players('nickname' [, array $additional_request_parameters]);`

**teams**

`$teams = $faceit->search()->teams('nickname' [, array $additional_request_parameters]);`

**tournaments**

`$tournaments = $faceit->search()->tournaments('name' [, array $additional_request_parameters]);`


</p>
</details>

#### ~~Teams~~

#### ~~Tournaments~~