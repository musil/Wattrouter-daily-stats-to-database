# Wattrouter daily stats to database

## MySQL
```bash
mysql  Ver 15.1 Distrib 10.3.28-MariaDB, for Linux (x86_64) using readline 5.1
```

##DB sturcture
it will create table "wattrouter_stat_day" with UTF8_Czech colation

```sql
CREATE TABLE `wattrouter_stat_day` (
  `id` bigint(20) NOT NULL,
  `datum` date NOT NULL,
  `cas` time NOT NULL,
  `sds1` decimal(10,2) NOT NULL,
  `sdh1` decimal(10,2) NOT NULL,
  `sdl1` decimal(10,2) NOT NULL,
  `sdp1` decimal(10,2) NOT NULL,
  `sds2` decimal(10,2) NOT NULL,
  `sdh2` decimal(10,2) NOT NULL,
  `sdl2` decimal(10,2) NOT NULL,
  `sdp2` decimal(10,2) NOT NULL,
  `sds3` decimal(10,2) NOT NULL,
  `sdh3` decimal(10,2) NOT NULL,
  `sdl3` decimal(10,2) NOT NULL,
  `sdp3` decimal(10,2) NOT NULL,
  `sds4` decimal(10,2) NOT NULL,
  `sdh4` decimal(10,2) NOT NULL,
  `sdl4` decimal(10,2) NOT NULL,
  `sdp4` decimal(10,2) NOT NULL,
  `sdo1` decimal(10,2) NOT NULL,
  `sdo2` decimal(10,2) NOT NULL,
  `sdo3` decimal(10,2) NOT NULL,
  `sdo4` decimal(10,2) NOT NULL,
  `sdo5` decimal(10,2) NOT NULL,
  `sdo6` decimal(10,2) NOT NULL,
  `sdo7` decimal(10,2) NOT NULL,
  `sdo8` decimal(10,2) NOT NULL,
  `sdo9` decimal(10,2) NOT NULL,
  `sdo10` decimal(10,2) NOT NULL,
  `sdo11` decimal(10,2) NOT NULL,
  `sdo12` decimal(10,2) NOT NULL,
  `sdo13` decimal(10,2) NOT NULL,
  `sdo14` decimal(10,2) NOT NULL,
  `sdi1` decimal(10,2) NOT NULL,
  `sdi2` decimal(10,2) NOT NULL,
  `sdi3` decimal(10,2) NOT NULL,
  `sdi4` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
```

whole DB dump is in file: 
<a href="./example-mysql-dump.sql">example-mysql-dump.sql</a>
