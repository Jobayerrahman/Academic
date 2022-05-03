import React from "react";
class AddSemester extends React.Component {
    render() {
        return (
            <>
                <form>
                    <fieldset>
                        <legend>Add Semester</legend>
                        <div className="mb-3">
                            <div className="form-group">
                                <label for="semesterSession" className="col-form-label">Session</label>
                                <input type="text" className="form-control" id="semesterSession" placeholder="Enter semester session"></input>
                            </div>
                        </div>
                        <div className="mb-3">
                            <div className="form-group">
                                <label for="semesterYear" className="form-label">Year</label>
                                <input type="text" className="form-control" id="semesterYear" placeholder="Enter semester year"></input>
                            </div>
                        </div>
                        <button type="submit" className="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </>
        )
    }

}

export default AddSemester;