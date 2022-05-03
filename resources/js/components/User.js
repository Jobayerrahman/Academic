import React from "react";
import AddUser from "./AddUser"
class User extends React.Component {
    render() {
        return (
            <>
                <div className="container">
                    <div className="row">
                        <div className="col-lg-4 col-md-6 col-sm-12">
                            <AddUser></AddUser>
                        </div>
                        <div className="col-lg-8 col-md-6 col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-active">
                                        <th scope="col">Serail No.</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>admin11</td>
                                        <td>admin11@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-warning me-1">Edit</button>
                                            <button type="button" class="btn btn-sm btn-outline-danger me-1">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </>
        );
    }
}

export default User;