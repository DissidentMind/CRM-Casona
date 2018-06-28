World Cup Rusia 2018 - Quinielsys
<hr>

### Table of Contents

**[Main Page](#main - WC-Russia-Launcher)**
**[Record New Player](#newrecord)**
**[Update Result](#updateresult)**
**[Display Entry](#displayentry)**
**[Stadistics Sheet](#displaystadistics)**

## Support 

Not support available, just for fun.


### Installation
To utilize this class, first import MysqliDb.php into your project, and require it.

```php
require_once ('MysqliDb.php');
```

### Main Page
Main Page
- Display Matches (Home Team & Guest Team)
- Results
- Fixtures
```php
WC-Russia-Launcher.php
```

### Record New Player
New Player, is requiered fill in a form with the results that will be predicted.
```
record-wc.php
```

### Update Result
In this section all the result of the match will be displayed and is available to update, is required to fill in home team and away team.
```
results-update-wc.php
```

### Display Entry
Display Entry, show choosen results of the players. Using $_GET params to display each player form.

```php
updater-wc.php?ply=2
planilla.php?ply=8
```

### Stadistics Sheet
Stadistics sections display a grid with the result of each match to be compared with all entries.

If is correct the result of the match display in green.

Exist three possible results:
L: Home Team
E: Draw
V: Guest Team

```
stadistics-wc.php
```

