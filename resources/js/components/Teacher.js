import React from "react";
import AddTeacher from "./AddTeacher";

class Teacher extends React.Component {
    render() {
        return (
            <>
                <div className="container">
                    <div className="row">
                        <div className="col-lg-4 col-md-6 col-sm-12">
                            <AddTeacher/>
                        </div>
                        <div className="col-lg-8 col-md-6 col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-active">
                                        <th scope="col">Serail No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Teacher Id</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Karim</td>
                                        <td>Karim11@gmail.com</td>
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

export default Teacher;