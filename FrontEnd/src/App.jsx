import { useState, useEffect } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function App() {
  const [data, setData] = useState([]);
  // fetch("http://127.0.0.1:8000/api/personas")
  // .then((response) => response.json())  
	// .then((data) => console.log(data));
  // console.log(data);

  useEffect(() => {
    const fetchPersonas = async () => {
      const response = await fetch('http://127.0.0.1:8000/api/personas'); // Reemplaza con la URL de tu API
      const data = await response.json();
      setData(data.personas);
    };
    fetchPersonas();
  }, []);

  return (
    <>
      <h1>Data from API</h1>
      <a href="https://vitejs.dev" target="_blank">
        <img src={viteLogo} className="logo" alt="Vite logo" />
      </a>
      <a href="https://react.dev" target="_blank">
        <img src={reactLogo} className="logo react" alt="React logo" />
      </a>
      <ul>
        {data.map(persona => (
          <li key={persona.ID_PERSONA}> 
            {persona.NOMBRES} {persona.AP_PATERNO} {persona.AP_MATERNO}
          </li>
        ))}
      </ul>
    </>
  );
}

  // return (
  //   <>
  //     {/* <div>
  //       <a href="https://vitejs.dev" target="_blank">
  //         <img src={viteLogo} className="logo" alt="Vite logo" />
  //       </a>
  //       <a href="https://react.dev" target="_blank">
  //         <img src={reactLogo} className="logo react" alt="React logo" />
  //       </a>
  //     </div>
  //     <h1>Vite + React</h1>
  //     <div className="card">
  //       <button onClick={() => setCount((count) => count + 1)}>
  //         count is {count}
  //       </button>
  //       <p>
  //         Edit <code>src/App.jsx</code> and save to test HMR
  //       </p>
  //     </div>
  //     <p className="read-the-docs">
  //       Click on the Vite and React logos to learn more
  //     </p> */}
  //   </>
  // )
//} 

export default App
