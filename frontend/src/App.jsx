import React, { useEffect, useState } from 'react'

export default function App() {
  const [admissions, setAdmissions] = useState([])
  const [loading, setLoading] = useState(false)
  const [error, setError] = useState(null)

  useEffect(() => {
    setLoading(true)
    fetch('/admin/api/admissions.php?per_page=50')
      .then((r) => r.json())
      .then((data) => {
        if (data && data.success) {
          setAdmissions(data.data || [])
        } else {
          setError(data.message || 'Failed to load')
        }
      })
      .catch((err) => setError(err.message))
      .finally(() => setLoading(false))
  }, [])

  return (
    <div style={{ maxWidth: 960, margin: '40px auto', fontFamily: 'Arial, sans-serif' }}>
      <h1>Admission Enquiries</h1>

      {loading && <p>Loading…</p>}
      {error && <p style={{ color: 'red' }}>{error}</p>}

      {!loading && !error && (
        <table style={{ width: '100%', borderCollapse: 'collapse' }}>
          <thead>
            <tr>
              <th style={{ textAlign: 'left', borderBottom: '1px solid #ddd', padding: 8 }}>Student</th>
              <th style={{ textAlign: 'left', borderBottom: '1px solid #ddd', padding: 8 }}>Grade</th>
              <th style={{ textAlign: 'left', borderBottom: '1px solid #ddd', padding: 8 }}>Parent</th>
              <th style={{ textAlign: 'left', borderBottom: '1px solid #ddd', padding: 8 }}>Phone</th>
              <th style={{ textAlign: 'left', borderBottom: '1px solid #ddd', padding: 8 }}>Submitted</th>
            </tr>
          </thead>
          <tbody>
            {admissions.map((a) => (
              <tr key={a.id}>
                <td style={{ padding: 8, borderBottom: '1px solid #f0f0f0' }}>{a.student_name}</td>
                <td style={{ padding: 8, borderBottom: '1px solid #f0f0f0' }}>{a.grade}</td>
                <td style={{ padding: 8, borderBottom: '1px solid #f0f0f0' }}>{a.parent_name}</td>
                <td style={{ padding: 8, borderBottom: '1px solid #f0f0f0' }}>{a.parent_phone}</td>
                <td style={{ padding: 8, borderBottom: '1px solid #f0f0f0' }}>{a.submitted_at}</td>
              </tr>
            ))}
          </tbody>
        </table>
      )}
    </div>
  )
}
