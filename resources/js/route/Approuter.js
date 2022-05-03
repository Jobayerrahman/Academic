import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Routes, Route} from 'react-router-dom';
import Semester from '../components/Semester';
import Menu from '../components/Menu';
function Approuter() {
    return (
        <BrowserRouter>
            <>
                <Menu />
                <Routes>
                    <Route path="/semester" exact component={Semester}/>
                </Routes>
            </>
        </BrowserRouter>
    );
}

export default Approuter;

if (document.getElementById('app-router')) {
    ReactDOM.render(<Approuter />, document.getElementById('app-router'));
}
