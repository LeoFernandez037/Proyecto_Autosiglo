import React from 'react';
import ReactDOM from 'react-dom/client';
import 'bootstrap/dist/css/bootstrap.min.css'

function Login() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Hpliii</div>

                        <div className="card-body">Soy yo Carla</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Login;

if (document.getElementById('root')) {
    const Index = ReactDOM.createRoot(document.getElementById("root"));

    Index.render(
        <React.StrictMode>
            <Login/>
        </React.StrictMode>
    )
}
