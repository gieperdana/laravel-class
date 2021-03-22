import React from 'react';
import ReactDOM from 'react-dom';

function Menu() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Ini menu</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Menu;

if (document.getElementById('menu')) {
    ReactDOM.render(<Menu />, document.getElementById('menu'));
}
