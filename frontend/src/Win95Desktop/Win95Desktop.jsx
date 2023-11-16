import { StartNavBar } from "../StartNavBar/StartNavBar.jsx"
import { StartMenu } from "../StartMenu/StartMenu.jsx"
import "./Win95Desktop.css"

export function Win95Desktop() {
  return(
    <div className="desktop">
      <StartNavBar/>
      <StartMenu/>
    </div>
  )
}