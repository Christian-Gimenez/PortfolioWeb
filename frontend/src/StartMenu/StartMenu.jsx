import { BanMenu } from "../BanMenu/BanMenu.jsx"
import { ItemMenu } from "../ItemMenu/ItemMenu.jsx"
import "./StartMenu.css"

export function StartMenu() {
  return(
    <section className="startMenu">
      <BanMenu />
      <ItemMenu>About me</ItemMenu>
      <ItemMenu>Experience</ItemMenu>
      <ItemMenu>Knowledge</ItemMenu>
      <ItemMenu>Contact</ItemMenu>
    </section>
  ) 
}