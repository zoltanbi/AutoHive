<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Database Schema

This project uses the following database schema, defined in [DBML](https://dbml.dbdiagram.io/docs) and visualized with [dbdiagram.io](https://dbdiagram.io).

### 🖼️ Visual Diagram

[![View on dbdiagram.io](https://img.shields.io/badge/Open%20in-dbdiagram.io-blue?style=flat&logo=datagrip)](https://dbdiagram.io/d/AutoHive-680a87c61ca52373f540ee62)

<p align="center">
  <img src="https://raw.githubusercontent.com/zoltanbi/AutoHive/main/diagram-preview.png" alt="Database Schema" width="600">
</p>

---

### 💻 DBML Definition
```dbml
Table password_reset_tokens {
  email VARCHAR [pk]
  token VARCHAR 
  created_at TIMESTAMP
}

Table sessions {
  id VARCHAR [pk]
  user_id INT [ref: > users.id]
  ip_address VARCHAR(45) 
  user_agent TEXT 
  payload TEXT 
  last_activity INT 
}


Table users {
  id INT [pk, increment]
  name VARCHAR 
  email VARCHAR 
  phone VARCHAR(45) 
  email_verified_at TIMESTAMP 
  password VARCHAR 
  google_id VARCHAR(25) 
  facebook_id VARCHAR(25) 
  remember_token VARCHAR 
  created_at TIMESTAMP
  updated_at TIMESTAMP
}

Table favourite_cars {
  id INT [pk]
  car_id INT [ref: > cars.id]
  user_id INT [ref: > users.id]
}

Table makers {
  id INT [pk]
  name VARCHAR(45)
}

Table models {
  id INT [pk]
  maker_id INT [ref: > makers.id]
  name VARCHAR(255)
}

Table car_types {
  id INT [pk]
  name VARCHAR(45)
}

Table fuel_types {
  id INT [pk]
  name VARCHAR(45)
}

Table provinces {
  id INT [pk]
  name VARCHAR(255)
}

Table cities {
  id INT [pk]
  name VARCHAR(255)
  province_id INT [ref: > provinces.id]
}

Table cars {
  id INT [pk]
  maker_id INT [ref: > makers.id]
  model_id INT [ref: > models.id]
  year INT
  price INT
  vin VARCHAR(255)
  mileage INT
  car_type_id INT [ref: > car_types.id]
  fuel_type_id INT [ref: > fuel_types.id]
  user_id INT [ref: > users.id]
  city_id INT [ref: > cities.id]
  address VARCHAR(255)
  phone VARCHAR(45)
  description LONGTEXT
  published_at TIMESTAMP
  created_at TIMESTAMP
  updated_at TIMESTAMP
  deleted_at TIMESTAMP
}

Table car_features {
  car_id INT [pk, ref: > cars.id]
  abs TINYINT
  air_conditioning TINYINT
  power_windows TINYINT
  power_door_locks TINYINT
  cruise_control TINYINT
  bluetooth_connectivity TINYINT
  remote_start TINYINT
  gps_navigation TINYINT
  heater_seats TINYINT
  climate_control TINYINT
  rear_parking_sensors TINYINT
  leather_seats TINYINT
}

Table car_images {
  id INT [pk]
  car_id INT [ref: > cars.id]
  image_path VARCHAR(255)
  position INT
}

```
