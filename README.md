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

#### Hubs ✓

<details>
<summary>Click to expand</summary>
<p>

**details**

`$hub_details = $faceit->hubs('id')->details();`

**matches**

`$hub_matches = $faceit->hubs('id')->matches();`

**members**

`$hub_members = $faceit->hubs('id')->members();`

**roles**

`$hub_roles = $faceit->hubs('id')->roles();`

**rules**

`$hub_rules = $faceit->hubs('id')->rules();`

**stats**

`$hub_stats = $faceit->hubs('id')->stats();`

</p>
</details>

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

#### Players ✓

<details>
<summary>Click to expand</summary>
<p>

**details**

`$player = $faceit->players('id')->details();`

**history**

`$player_history = $faceit->players('id')->history('csgo'[, array $additional_request_parameters]);`

**hubs**

`$player_hubs = $faceit->players('id')->hubs([array $additional_request_parameters]);`

**stats**

`$player_stats = $faceit->players('id')->stats('csgo');`

**tournaments**

`$player_tournaments = $faceit->players('id')->tournaments([array $additional_request_parameters]);`

</p>
</details>

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

#### Teams ✓

<details>
<summary>Click to expand</summary>
<p>

**details**

`$team_details = $faceit->teams('id')->details();`

**stats**

`$team_stats = $faceit->teams('id')->stats('csgo');`

**tournaments**

`$team_tournaments = $faceit->teams('id')->tournaments([array $additional_request_parameters]);`

</p>
</details>

#### ~~Tournaments~~