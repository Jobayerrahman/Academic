import React, { Component } from "react";
import SemesterPage from "../pages/SemesterPage";
import StudentPage from "../pages/StudentPage";
import TeacherPage from "../pages/TeacherPage";
import UserPage from "../pages/UserPage";


class Menu extends Component{
    render(){
        return (
            <div>
                <TeacherPage/>
            </div>   
        )
    }
}

export default Menu;