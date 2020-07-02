# Symfony form recorder
[![Build Status](https://travis-ci.com/Ferror/symfony-form-recorder.svg?branch=master)](https://travis-ci.com/Ferror/symfony-form-recorder)
[![codecov](https://codecov.io/gh/Ferror/symfony-form-recorder/branch/master/graph/badge.svg)](https://codecov.io/gh/Ferror/symfony-form-recorder)

## Business
API service that will enable client to store his contacts or other values that are submited via form on any static website.

## Project assumptions
* create updated form handling service
* must be dockerized
* unpacked dependencies
* only php config

## To do

- [x] Docker
- [x] PHPUnit
- [X] Easy Coding Standard
- [X] PHPStan
- [ ] Improved form submit from symfony-form-handler project
- [ ] Mailer adapters (notification)
- [ ] Saver (saving data)

### CI
#### Via Travis CI
- [x] PHPUnit
- [x] PHPStan
- [x] Easy Coding Standard
- [x] PHP Mess Detector

### CD
- [ ] Heroku deployment
