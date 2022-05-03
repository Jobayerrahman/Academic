import React from "react";

class AddTeacher extends React.Component {
    render() {
        return (
            <>
                <form>
                    <fieldset>
                        <legend>Add New Teacher</legend>
                        <div className="mb-3">
                            <div className="form-group">
                                <label for="userName" className="col-form-label">Name</label>
                                <input type="text" className="form-control" id="userName" placeholder="Enter name"></input>
                            </div>
                        </div>
                        <div className="mb-3">
                            <div className="form-group">
                                <label for="userName" className="col-form-label">Teacher Id</label>
                                <input type="text" className="form-control" id="userName" placeholder="Enter id"></input>
                            </div>
                        </div>
                        <div className="mb-3">
                            <div className="form-group">
                                <label for="userEmail" className="form-label">Email</label>
                                <input type="email" className="form-control" id="userEmail" placeholder="Enter user email"></input>
                            </div>
                        </div>
                        <button type="submit" className="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </>
        );
    }
}

export default AddTeacher;