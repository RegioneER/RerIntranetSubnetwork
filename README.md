# Matomo RerIntranetSubnetwork Plugin (ipv4)

[![Catalogo del riuso software](https://img.shields.io/badge/Riuso%20AGID-Software-%230076e3)](https://developers.italia.it/it/pa/r_emiro)
[![Matomo version](https://img.shields.io/badge/matomo-4.x--dev-success)](https://github.com/matomo-org/matomo)
[![Matomo version](https://img.shields.io/badge/matomo-3.x--dev-success)](https://github.com/matomo-org/matomo)
[![GitHub license](https://img.shields.io/github/license/RegioneER/RerIntranetSubnetwork)](https://github.com/RegioneER/RerIntranetSubnetwork/blob/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/RegioneER/RerIntranetSubnetwork)](https://github.com/RegioneER/RerIntranetSubnetwork/issues)
[![GitHub forks](https://img.shields.io/github/forks/RegioneER/RerIntranetSubnetwork)](https://github.com/RegioneER/RerIntranetSubnetwork/network)

## Description

This [Matomo plugin](https://plugins.matomo.org/RerIntranetSubnetwork) adds to your installation a new _dimension_ called **visit_subnetwork** then reports visitor count coming from private networks related to internet traffic.

Settings are easily configurable by Matomo's General Settings administration page. You have two choices.

- [Private Address Space from RCF 1918](https://datatracker.ietf.org/doc/html/rfc1918#section-3), such as 127.0.0.1, 192.168.x.x, 172.16.x.x and 10.x.x.x.

- Configure your custom subnet rule by writing a regular expression matching the included IPs.