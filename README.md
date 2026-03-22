# PHP Backend API

Backend API built with pure PHP using a layered architecture (Controller, Service, Repository).

## Overview

This project demonstrates how to build a simple, structured backend without frameworks, focusing on clarity and separation of concerns.

## Features

- REST-like routing using query parameters
- Layered architecture:
  - Controller
  - Service
  - Repository
- MySQL integration with PDO
- Standardized JSON responses

## Tech Stack

- PHP (no framework)
- MySQL
- Git

## Endpoints

### List items
GET /?route=items

### Create item
GET /?route=create&name=ItemName

## How to run

```bash
php -S localhost:8000
