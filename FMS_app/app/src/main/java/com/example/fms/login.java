package com.example.fms;

import static com.android.volley.toolbox.Volley.*;

import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import android.content.SharedPreferences;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

public class login extends AppCompatActivity {
    EditText email,password1;
    Button btn;
    String std_id, psd ,url;
    ProgressBar progressBar;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        email = findViewById(R.id.email);
        password1 = findViewById(R.id.password);
        btn = findViewById(R.id.btn);
        btn.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                std_id = email.getText().toString();
                psd = password1.getText().toString();
//                Toast.makeText(login.this, "Student Id"+std_id+"password "+psd, Toast.LENGTH_SHORT).show();
//                userLogin();
                if (std_id.length() ==0 || psd.length() == 0 ) {
                    Toast.makeText(login.this, "Please Enter a Student ID and Password for login", Toast.LENGTH_SHORT).show();
                }else{
                    login(std_id , psd);
                }
            }
        });
    }
    private void login(String id ,String password) {
//        SharedPreferences sharedPreferences = getSharedPreferences("Settings", Context.MODE_PRIVATE);
//        SharedPreferences.Editor editor = sharedPreferences.edit();
        // url to post our data
        url = "http://192.168.0.116/fms/backend/api.php";

        // creating a new variable for our request queue

        RequestQueue queue = Volley.newRequestQueue(login.this);
        // on below line we are calling a string
        // request method to post the data to our API
        // in this we are calling a post method.
        StringRequest request = new StringRequest(Request.Method.POST, url, new com.android.volley.Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                try {
//                    Toast.makeText(login.this, "upper", Toast.LENGTH_SHORT).show();
                    // on below line passing our response to json object.
                    JSONObject jsonObject = new JSONObject(response);
//                    Toast.makeText(login.this, jsonObject.toString(), Toast.LENGTH_SHORT).show();
                    // on below line we are checking if the response is null or not.

                    if (jsonObject.getInt("success") != 1) {
                        // displaying a toast message if we get error
                        Toast.makeText(login.this, "Invalid Student ID and Password", Toast.LENGTH_SHORT).show();
                    } else {

//                        editor.putString("img", jsonObject.getString("img"));
//                        editor.putString("id",  jsonObject.getString("id"));
//                        editor.putString("name",  jsonObject.getString("name"));
//                        editor.apply();

                        Intent i = new Intent(login.this, MainActivity.class);

                        // on below line we are
                        // starting a new activity.
                        startActivity(i);

                        // on the below line we are finishing
                        // our current activity.
                        finish();
                        //storing the user in shared preferences
                        SharedPrefManager.getInstance(getApplicationContext()).userLogin(user);

                        Toast.makeText(login.this, jsonObject.getString("message"), Toast.LENGTH_SHORT).show();
                    }
                    // on below line we are displaying
                    // a success toast message.
                } catch (JSONException e) {
                    e.printStackTrace();
                    Toast.makeText(login.this, e+"json error", Toast.LENGTH_SHORT).show();
                }
            }
        }, new com.android.volley.Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                // method to handle errors.
                Toast.makeText(login.this,"Fail to get course", Toast.LENGTH_LONG).show();

            }        }) {

            @Override
            public String getBodyContentType() {
                // as we are passing data in the form of url encoded
                // so we are passing the content type below
                return "application/x-www-form-urlencoded; charset=UTF-8";
            }

            @Override
            protected Map<String, String> getParams() {

                // below line we are creating a map for storing our values in key and value pair.
                Map<String, String> params = new HashMap<String, String>();

                // on below line we are passing our key and value pair to our parameters.
                params.put("st_id", id);
                params.put("password", password);
                params.put("login", "login");


                // at last we are returning our params.
                return params;
            }
        };
        // below line is to make
        // a json object request.
        queue.add(request);
    }

}