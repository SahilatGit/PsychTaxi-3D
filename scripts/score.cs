
using UnityEngine;
using UnityEngine.UI;

public class score : MonoBehaviour
{
    public Transform player;
    public Text Highscore;

    // Update is called once per frame
    void Update()
    {
        Highscore.text = player.position.z.ToString("0");    
    }
}
