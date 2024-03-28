package com.example.fms.ui.gallery;

import static android.widget.Toast.*;

import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
import android.widget.Toast;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;
import androidx.recyclerview.widget.RecyclerView;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.example.fms.MainActivity;
import com.example.fms.SharedPrefManager;
import com.example.fms.paid_adapter;
import com.example.fms.paid;
import com.example.fms.R;
import androidx.recyclerview.widget.LinearLayoutManager;
import org.json.*;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import java.util.HashMap;
import java.util.Map;
import com.example.fms.PreferenceHelper;
import android.content.SharedPreferences;
public class GalleryFragment extends Fragment {

    private GalleryViewModel galleryViewModel;
    RecyclerView paid_recyclerview;
    String url,id,paid;

    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {
        View root = inflater.inflate(R.layout.fragment_gallery, container, false);


        url = "http://192.168.0.116/fms/backend/api.php";

        id  =  "2";
        paid  = "paid";

        RequestQueue queue = Volley.newRequestQueue(this.getContext());

        StringRequest request = new StringRequest(Request.Method.POST, url, new com.android.volley.Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                try {

                    paid_recyclerview = (RecyclerView) root.findViewById(R.id.paidrecycler);
//                    Toast.makeText(getContext(), "  json not error 1" , LENGTH_SHORT).show();
                    JSONArray arr = new JSONArray(response.toString());
                    //create an array of product object
                    paid[] data = new paid[arr.length()];


                    for (int i = 0; i < arr.length(); ++i) {
                        JSONObject jsonObject = arr.getJSONObject(i);
                        data[i] = new paid(i,jsonObject.getString("f_name"),jsonObject.getString("amount"),jsonObject.getString("date"));
                    }

//                    Toast.makeText(getContext(), data.toString()+"  json not error 1" , LENGTH_SHORT).show();
                    paid_adapter paid_adapter = new paid_adapter(data);
                    paid_recyclerview.setHasFixedSize(true);
                    paid_recyclerview.setLayoutManager(new LinearLayoutManager(root.getContext()));
                    paid_recyclerview.setAdapter(paid_adapter);

                } catch (JSONException e) {
                    e.printStackTrace();
                    Toast.makeText(getContext(), e+"  json error" , LENGTH_SHORT).show();
                }
            }
        }, new com.android.volley.Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                // method to handle errors.
                Toast.makeText(getContext(), error+"  Volley error" , LENGTH_SHORT).show();

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
                params.put("paid", paid);
                // at last we are returning our params.
                return params;
            }
        };
        // below line is to make
        // a json object request.
        queue.add(request);



        return root;
    }


}