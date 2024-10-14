import React, { useState } from 'react';
import ReactDOM from 'react-dom/client';
// import 'bootstrap/dist/css/bootstrap.min.css'
import '../css/Login.css';
import auto from '../Imagenes/auto.png';
import auto4 from '../Imagenes/auto4.png';

function Login() {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log('Iniciando sesión con:', { email, password });
        // Aquí podrías agregar más lógica para manejar el inicio de sesión, como enviar los datos a un servidor
    }

    return (
        <div className="login-container">
            <div className="login-box">
                <h1>Iniciar Sesión</h1>
                <div className="card-body">
                    <p>Bienvenido de nuevo</p>
                    <form onSubmit={handleSubmit}>
                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
                            required
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            className="form-control mb-2"
                        />
                        <input
                            type="password"
                            name="password"
                            placeholder="Contraseña"
                            required
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                            className="form-control mb-2"
                        />
                        <button type="submit" className="btn btn-primary">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
            <img src={auto} alt="Auto" className="auto_derecha" />
            <img src={auto4} alt="Auto2" className="auto_izquierda" />
        </div>
    );
}

export default Login;

if (document.getElementById('root')) {
    const Index = ReactDOM.createRoot(document.getElementById("root"));

    Index.render(
        <React.StrictMode>
            <Login />
        </React.StrictMode>
    )
}
