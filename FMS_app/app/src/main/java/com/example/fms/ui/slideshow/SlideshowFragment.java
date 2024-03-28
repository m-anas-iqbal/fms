package com.example.fms.ui.slideshow;

import static android.widget.Toast.LENGTH_SHORT;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
import android.widget.Toast;


import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;
import androidx.recyclerview.widget.RecyclerView;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.example.fms.fees;
import com.example.fms.adapter;
import com.example.fms.R;
import com.example.fms.paid;
import com.example.fms.paid_adapter;

import androidx.recyclerview.widget.LinearLayoutManager;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import com.example.fms.PreferenceHelper;
import java.util.HashMap;
import java.util.Map;

public class SlideshowFragment extends Fragment {
    RecyclerView recyclerView;
    private SlideshowViewModel slideshowViewModel;
    String url,id,unpaid;

    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {

        View root = inflater.inflate(R.layout.fragment_slideshow, container, false);

        recyclerView = (RecyclerView) root.findViewById(R.id.myrecycler);
        url = "http://192.168.0.116/fms/backend/api.php";
        id  =  "2";
        unpaid  = "paid";

        RequestQueue queue = Volley.newRequestQueue(this.getContext());

        StringRequest request = new StringRequest(Request.Method.POST, url, new com.android.volley.Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                try {

                    recyclerView = (RecyclerView) root.findViewById(R.id.myrecycler);
//                    Toast.makeText(getContext(), "  json not error 1" , LENGTH_SHORT).show();
                    JSONArray arr = new JSONArray(response.toString());
                    //create an array of product object

                    fees[] data = new fees[arr.length()];

                    for (int i = 0; i < arr.length(); ++i) {
                        JSONObject jsonObject = arr.getJSONObject(i);
                        data[i] = new fees(i,jsonObject.getString("amount"),jsonObject.getString("date"),jsonObject.getString("f_name"));
                    }

//                    Toast.makeText(getContext(), data.toString()+"  json not error 1" , LENGTH_SHORT).show();
                    adapter fees_adapter = new adapter(data,getContext());
                    recyclerView.setHasFixedSize(true);
                    recyclerView.setLayoutManager(new LinearLayoutManager(getContext()));
                    recyclerView.setAdapter(fees_adapter);

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
                params.put("unpaid", unpaid);
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