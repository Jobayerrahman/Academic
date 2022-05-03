import React from "react";

class AddUser extends React.Component {
    render() {
        return (
            <>
                <form>
                    <fieldset>
                        <legend>Add New User</legend>
                        <div className="mb-3">
                            <div className="form-group">
                                <label for="userName" className="col-form-label">Username</label>
                                <input type="text" className="form-control" id="userName" placeholder="Enter username"></input>
                            </div>
                        </div>
                        <div className="mb-3">
                            <div className="form-group">
                                <label for="userEmail" className="form-label">Email</label>
                                <input type="email" className="form-control" id="userEmail" placeholder="Enter user email"></input>
                            </div>
                        </div>
                        <div className="mb-3">
                            <div className="form-group">
                                <label for="userPassword" className="form-label">Password</label>
                                <input type="password" className="form-control" id="userPassword" placeholder="Enter user password"></input>
                            </div>
                        </div>
                        <button type="submit" className="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </>
        );
    }
}

export default AddUser;