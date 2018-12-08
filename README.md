# reliefsupports.org

[![Riot.im](https://img.shields.io/badge/chat-Riot.im-lightgrey.svg)](https://riot.im/app/#/room/#reliefsupports:matrix.org)

This is a community-driven Open Source project to support relief support activities conducted by volunteers. This project was originally created to support flood relief activities in Sri Lanka in May 2017.

We are currently on a phase of revamping the application and we welcome your innovative ideas and suggestions to make a better solution for the community.

## Developer Guide

### Prerequisites

-   PHP >= 7.1.3
-   [composer](https://getcomposer.org/)
-   [Vagrant](https://www.vagrantup.com/)
-   [VirtualBox](https://www.virtualbox.org/wiki/Downloads)

### Setup

```
git clone git@github.com:reliefsupports/reliefsupports.org.git
cd reliefsupports.org
```

```
npm i // or npm install
```

> `composer install` runs in background as a `preinstall` npm script

#### Start

-   Create `.env` file by copying `.env.example`

**If only `APP_KEY` value not present in `.env` file.**

-   Run `php artisan key:generate --show` and copy the generated key string.
-   Update that key string with `APP_KEY` in the `.env`.

##### With Vagrant/Homestead (Recomended)

-   Run `npm run vagrant:init:<mac|win>` command to initialize the development environment.
-   Run `npm run vagrant` or `vagrant up`.
-   Run `vagrant ssh` for logging to Vagrant Dev. Environment.
-   Run `npm run vagrant:destroy` or `vagrant destroy` to destroy the Vagrant env.

###### Update host files

Add following record to `hosts` file. After then you can access your dev site via `reliefsupports.local`.

```
192.168.10.10 reliefsupports.local
```

> https://support.rackspace.com/how-to/modify-your-hosts-file/

##### Database migrations/seed

```
php artisan migrate // or npm run db:migrate
php artisan db:seed // or npm run db:seed
```

Run `vagrant ssh` for terminal access to vagrant env.

### Guidelines

-   Setup the application code base in your local machine using the above steps.
-   See the Issue Tracker, read the [wiki](https://github.com/reliefsupports/reliefsupports.org/wiki) and get a proper understanding of what's done and what's need to be done.
-   Always create a separate branch when you starting to work on something.
-   Keep the local working directory always up to date.
-   Always use `git rebase` with master and fix conflicts before you create a pull request.
-   At least one peer review and approval required to merge a pull request to the master.
-   Don't create new `labels`. If you feel that we need a new `label`, please create an issue for that first.
-   If you do any database schema or architectural changes you should update those in respective places on the [wiki](https://github.com/reliefsupports/reliefsupports.org/wiki).

#### Issue labels

-   `story` - High-level user stories. These are can break into multiple sub-tasks and assign to different people.
-   `priority:<high|critical|medium|low>`
-   `feature`
-   `bug`
-   `duplicate`
-   `enhancement`
-   `refactoring`

#### Branching model

Please use following naming conventions when you creating branches for your work. All feature names should be in all lowercase.

-   feature - `feature/<feature-name-or-id-or-issue-number>`
-   configureation/devops work - `devops/<config-name-or-id-or-issue-number>`
-   bug - `fix/<bug-name-or-id-or-issue-number>`
-   refactoring tasks - `refactor/<refactor-name-or-id-or-issue-number>`

## [Contributors](https://github.com/reliefsupports/reliefsupports.org/blob/master/CONTRIBUTORS.md)

## License

MIT
