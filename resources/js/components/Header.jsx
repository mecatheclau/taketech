import React, { component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends component {
    render() {
        return (
            <div class="card">
                <div class="card-header">
                    <span> am header </span>
                </div>
                <div class="card-body">
                    <span>am body</span>
                </div>
            </div>
        );
    }
}

if (document.getElementById('header')) {
    ReactDOM.render('<Header />', document.getElementById('header'));
}