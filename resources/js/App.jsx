import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Route, Routes, Link } from 'react-router-dom';
import Login from './components/Login';

function Home() {
  return (
    <div>
      <h1>App</h1>
      {/* Botón que dirige a la ruta de login */}
      <Link to="/login">
        <button>Go to Login</button>
      </Link>
    </div>
  );
}

function App() {
  return (
    <Router>
      <div>
        {/* Configuración de rutas */}
        <Routes>
          {/* La ruta principal renderiza el componente Home */}
          <Route path="/" element={<Home />} />
          {/* La ruta /login renderiza el componente Login */}
          <Route path="/login" element={<Login />} />
        </Routes>
      </div>
    </Router>
  );
}

export default App;

// Renderización en el index principal
if (document.getElementById('root')) {
  const Index = ReactDOM.createRoot(document.getElementById("root"));

  Index.render(
    <React.StrictMode>
      <App/>
    </React.StrictMode>
  );
}

