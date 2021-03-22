import React from 'react';
import ReactDOM from 'react-dom';
import Menu from '../pages/Menu';

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <Menu />
                        <div className="card-header">Ini adalah component</div>

                        <div className="card-body">Test component</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('root')) {
    ReactDOM.render(<Example />, document.getElementById('root'));
}
