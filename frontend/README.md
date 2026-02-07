# Frontend (React + Vite)

This small frontend is bootstrapped with Vite and React. It fetches admissions from the existing PHP API at `/admin/api/admissions.php`.

Run locally:

```bash
cd frontend
npm install
npm run dev
```

The dev server runs on `http://localhost:5173` by default. The PHP API sets CORS to allow `*`, so you can fetch the API during development.
