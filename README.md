# Symfony React GraphQL Boilerplate

A boilerplate for an application using Symfony for the backend, React with TypeScript for the frontend, GraphQL for communication, and Material-UI for styling.

## Features

- **Backend:** Symfony
- **Frontend:** React with TypeScript
- **API:** GraphQL
- **Styling:** Material-UI using Material Kit React template

## Getting Started

Follow these instructions to set up and run the project locally.

### Prerequisites

- PHP and Composer installed
- Node.js and npm installed
- Symfony CLI installed

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/symfony-react-graphql-boilerplate.git
    cd symfony-react-graphql-boilerplate
    ```

2. **Set up the backend:**

    ```bash
    cd backend
    composer install
    ```

3. **Set up the frontend:**

    ```bash
    cd ../frontend
    npm install
    ```

### Configuration

#### Backend (Symfony)

1. **GraphQL Configuration:**

    Add the following configuration to `config/packages/graphql.yaml`:

    ```yaml
    overblog_graphql:
        definitions:
            schema:
                query: App\GraphQL\Query\QueryType
            mappings:
                auto_discover:
                    root_dir: '%kernel.project_dir%/src/GraphQL'
                    dirs: ['Types']
        security:
            introspection: true
    ```

2. **Create a sample QueryType in `src/GraphQL/Query/QueryType.php`:**

    ```php
    namespace App\GraphQL\Query;

    use Overblog\GraphQLBundle\Definition\Resolver\QueryInterface;

    class QueryType implements QueryInterface
    {
        public function hello(): string
        {
            return 'Hello, world!';
        }
    }
    ```

#### Frontend (React)

1. **Set up Apollo Client in `src/apollo-client.ts`:**

    ```typescript
    import { ApolloClient, InMemoryCache } from '@apollo/client';

    const client = new ApolloClient({
      uri: 'http://localhost:8000/graphql',
      cache: new InMemoryCache(),
    });

    export default client;
    ```

2. **Wrap your app with the ApolloProvider in `src/index.tsx`:**

    ```typescript
    import React from 'react';
    import ReactDOM from 'react-dom';
    import App from './App';
    import { ApolloProvider } from '@apollo/client';
    import client from './apollo-client';

    ReactDOM.render(
      <ApolloProvider client={client}>
        <App />
      </ApolloProvider>,
      document.getElementById('root')
    );
    ```

3. **Create a sample GraphQL query component in `src/components/Hello.tsx`:**

    ```typescript
    import React from 'react';
    import { useQuery, gql } from '@apollo/client';

    const HELLO_QUERY = gql`
      query {
        hello
      }
    `;

    const Hello: React.FC = () => {
      const { loading, error, data } = useQuery(HELLO_QUERY);

      if (loading) return <p>Loading...</p>;
      if (error) return <p>Error :(</p>;

      return <div>{data.hello}</div>;
    };

    export default Hello;
    ```

4. **Use the sample component in `src/App.tsx`:**

    ```typescript
    import React from 'react';
    import './App.css';
    import Hello from './components/Hello';

    const App: React.FC = () => {
      return (
        <div className="App">
          <header className="App-header">
            <Hello />
          </header>
        </div>
      );
    };

    export default App;
    ```

### Running the Application

1. **Start the Symfony server:**

    ```bash
    cd backend
    symfony serve
    ```

2. **Start the React development server:**

    ```bash
    cd frontend
    npm start
    ```

### Project Structure

  ```
  symfony-react-graphql-boilerplate/
  │
  ├── backend/
  │ ├── config/
  │ ├── public/
  │ ├── src/
  │ │ ├── Controller/
  │ │ └── GraphQL/
  │ ├── templates/
  │ ├── translations/
  │ ├── var/
  │ └── vendor/
  │
  └── frontend/
  ├── public/
  ├── src/
  │ ├── apollo-client.ts
  │ ├── App.tsx
  │ ├── components/
  │ │ └── Hello.tsx
  │ └── index.tsx
  ├── package.json
  ├── tsconfig.json
  └── node_modules/
  ```


### Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.

### License

This project is licensed under the MIT License.

---

Happy coding!
