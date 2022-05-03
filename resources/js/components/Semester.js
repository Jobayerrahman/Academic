import { divide } from "lodash";
import React, { Component } from "react";
import { ReactDOM } from "react-dom";
import AddSemester from "./AddSemester";
class Semester extends Component {
    render() {
        return (
            <>
                <div className="container">
                    <div className="row">
                        <div className="col-lg-4 col-md-6 col-sm-12">
                            <AddSemester></AddSemester>
                        </div>
                        <div className="col-lg-8 col-md-6 col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-active">
                                        <th scope="col">Serail No.</th>
                                        <th scope="col">Semester Name</th>
                                        <th scope="col">Session</th>
                                        <th scope="col">Year</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Spring-22</td>
                                        <td>Spring</td>
                                        <td>2022</td>
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
        )
    }
}

export default Semester;