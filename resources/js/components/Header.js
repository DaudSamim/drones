import React, { Component } from 'react';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';
import Home from './Home';
import About from './About';
export default class Header extends Component {
    render() {
        return (
            <Router>
                <div className="row">
                <div id="list-example" className="list-group col-2">
                  <Link className="list-group-item list-group-item-action" to="/">Home</Link>
                  <Link className="list-group-item list-group-item-action" to="/About">About</Link>
                </div>
                <Route exact path='/' component={Home} />
                 <Route exact path='/About' component={About} />
                </div>
            </Router>
        );
    }
}

