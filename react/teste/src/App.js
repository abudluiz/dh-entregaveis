import React, { Component } from 'react';
import './App.css';

class App extends Component {
 
 constructor(){
   super();

   this.state = {
      first: 0,
      second: 0
  }
 }
 
  armazena(event){
    const valor = event.target.value;
    const nome = event.target.name;
    this.setState({
      [nome]: valor,
    })
  }
 
  soma() {
   const resultado = parseInt(this.state.first) + parseInt(this.state.second);
   this.setState({
    resultado
   })
   console.log (this.state.second)
  }

  render() {
    return (
      <div>
        <input type= "number" name="first" onChange={this.armazena.bind(this)}/>
        <input type="number" name="second" onChange={this.armazena.bind(this)}/>
        <button onClick={()=>this.soma()}>
          Calcular
        </button> 
        {
          this.state.resultado && `Olá Allan, o resultado é ${this.state.resultado}` 
        } 
      </div>
    );
  }
}

export default App;
