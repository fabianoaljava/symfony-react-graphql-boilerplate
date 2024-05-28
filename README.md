# Symfony + React + GraphQL + TypeScript Boilerplate

This project is a boilerplate for building a full-stack application using Symfony for the backend and React for the frontend. It includes GraphQL for API communication and TypeScript for type safety. The frontend uses Material UI for styling and components.

## Project Structure

- **api**: Contains the Symfony backend.
- **admin**: Contains the React frontend.

## Features

- Symfony backend with API endpoints
- React frontend with Material UI components
- TypeScript for both backend and frontend
- GraphQL integration
- Basic login structure in the admin panel
- Docker setup for containerized development

## Getting Started

### Prerequisites

- Node.js
- Composer
- Docker & Docker Compose

### Installation

1. **Clone the repository:**

  ```bash
  git clone https://github.com/your-username/your-repository.git
  cd your-repository
  ```   

2. **Backend Setup (API):**

  ```bash
  cd api
  composer install
  cp .env.example .env
  # Update .env with your database credentials
  php bin/console doctrine:database:create
  php bin/console doctrine:migrations:migrate
  symfony serve
  ```

3. ***Frontend Setup (Admin): ***

  ```bash
  cd ../admin
  npm install
  npm start
  ```

### Docker Setup

Build and start containers:

  ```bash
  docker-compose up --build
  ```

### Accessing the Application:

Symfony API: http://localhost:8000
React Admin: http://localhost:3000


### File Structure
  ```
  .
  ├── api
  │   ├── config
  │   ├── public
  │   ├── src
  │   ├── templates
  │   ├── .env
  │   ├── composer.json
  │   └── ...
  ├── admin
  │   ├── public
  │   ├── src
  │   ├── .eslintrc.js
  │   ├── .babelrc
  │   ├── package.json
  │   ├── tsconfig.json
  │   └── ...
  ├── docker-compose.yml
  └── README.md
  ```

### Scripts

#### Backend (API)

symfony serve: Run the Symfony server
php bin/console doctrine:migrations:migrate: Run database migrations

#### Frontend (Admin)
npm start: Start the development server
npm build: Create a production build
npm test: Run tests

### Environment Variables
#### Backend
Configure your .env file in the api directory with your database credentials and other settings.
#### Frontend
Configure your .env file in the admin directory for frontend-specific settings.

## Contributing
1. Fork the repository
2. Create your feature branch (git checkout -b feature/fooBar)
3. Commit your changes (git commit -am 'Add some fooBar')
4. Push to the branch (git push origin feature/fooBar)
5. Create a new Pull Request

## License
This project is licensed under the MIT License.