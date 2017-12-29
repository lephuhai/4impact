"use strict";

var Layout = React.createClass({
    render: function() {
        return (
            <div className="page-content-inner organization-home">
                <div className="portlet light portlet-fit">
                    <div className="portlet-body">
                        <div className="row">
                            <div className="col-md-2 org-sidebar">
                                <section>
                                    <h6 className="nav-header">Organization</h6>
                                    <ul className="nav nav-stacked">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#">Projects &amp; Teams</a>
                                        </li>
                                        <li>
                                            <a href="#">Stats</a>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
});