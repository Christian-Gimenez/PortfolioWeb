import { StartBtn } from "../StartBtn/StartBtn.jsx"
import "./StartNavBar.css"

export function StartNavBar() {
  return(
    <nav className="startNavBar">
      <StartBtn iconURL="../win95-icons/png/MOD-windows-0.png" insdeText="Start" altImg="Start button"/>
    </nav>
  )
}