import logo from './logo.svg';
import './App.css';

function App() {

  function percentage(){
    let daamse = parseInt(document.getElementById("daamse").value);
    let daaese = parseInt(document.getElementById("daaese").value);
    let wtmse = parseInt(document.getElementById("wtmse").value);
    let wtese = parseInt(document.getElementById("wtese").value);
    let cdmse = parseInt(document.getElementById("cdmse").value);
    let cdese = parseInt(document.getElementById("cdese").value);
    let ccmse = parseInt(document.getElementById("ccmse").value);
    let ccese = parseInt(document.getElementById("ccese").value);
  
    let daa_total = daamse*0.3 + daaese*0.7;
    let wt_total = wtmse*0.3 + wtese*0.7;
    let cd_total = cdmse*0.3 + cdese*0.7;
    let cc_total = ccmse*0.3 + ccese*0.7;
  
    document.getElementById("t1").value = daa_total.toFixed(2);
    document.getElementById("t2").value = wt_total.toFixed(2);
    document.getElementById("t3").value = cd_total.toFixed(2);
    document.getElementById("t4").value = cc_total.toFixed(2);
  
    let SGPA = (daa_total+wt_total+cd_total+cc_total)/40;
    document.getElementById("sgpa").value = SGPA;
  }

  return (
    <>
    <meta charSet="UTF-8" />
    <meta httpEquiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VIT Results</title>
    <header>
      Vishwakarma Institute of Technology, Pune-37 <br />
      Department of Computer Engineering <br />
      A.Y.2022-2023
    </header>
    <h1>Enter your Marks</h1>
    <div className="container">
      <table>
        <tbody>
          <tr className="heading">
            <th>Subject</th>
            <th>MSE Marks</th>
            <th>ESE Marks</th>
            <th>Total</th>
          </tr>
          <tr>
            <td>Design and Analysis of Algorithms</td>
            <td>
              <input type="number" id="daamse" />
            </td>
            <td>
              <input type="number" id="daaese" />
            </td>
            <td>
              <input type="text" id="t1" readOnly="" />
            </td>
          </tr>
          <tr>
            <td>Web Technology</td>
            <td>
              <input type="number" id="wtmse" />
            </td>
            <td>
              <input type="number" id="wtese" />
            </td>
            <td>
              <input type="text" id="t2" readOnly="" />
            </td>
          </tr>
          <tr>
            <td>Compiler Design</td>
            <td>
              <input type="number" id="cdmse" />
            </td>
            <td>
              <input type="number" id="cdese" />
            </td>
            <td>
              <input type="text" id="t3" readOnly="" />
            </td>
          </tr>
          <tr>
            <td>Cloud Computing</td>
            <td>
              <input type="number" id="ccmse" />
            </td>
            <td>
              <input type="number" id="ccese" />
            </td>
            <td>
              <input type="text" id="t4" readOnly="" />
            </td>
          </tr>
        </tbody>
      </table>

      <button onclick={percentage}>
        Calculate
      </button>

      <div className="SGPA">
        CGPA:
        <input type="text" id="sgpa" style={{ marginLeft: 10 }} readOnly="" />
      </div>
    </div>
</>
  );
}

export default App;
