
using UnityEngine;

public class playercollision : MonoBehaviour
{

    public movement playermove;

    void OnCollisionEnter(Collision collisioninfo)
    {
        if(collisioninfo.collider.tag == "obstacle")
        {
            playermove.enabled = false;
            FindObjectOfType<GameManager>().EndGame();
        }
    }
}
